<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Order;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $payment = Payment::where('total', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('order_id', 'LIKE', "%$keyword%")
                ->orWhere('slip', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $payment = Payment::latest()->paginate($perPage);
        }

        return view('payment.index', compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        //อ่านค่า order_id จาก url
        $order_id  = $request->get('order_id');
        //query order จาก db ด้วย order_id ถ้าไม่มี order แสดง Not found
        $order = Order::findOrFail($order_id);

        return view('payment.create' , compact('order') );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('slip')) {
            $requestData['slip'] = $request->file('slip')
                ->store('uploads', 'public');
        }

        Payment::create($requestData);

        Order::where('id',$requestData['order_id'])
            ->update([
                'status'=>'checking',
                'checking_at'=>date("Y-m-d H:i:s"), //timestamp ปัจจุบัน
            ]);

        return redirect('payment')->with('flash_message', 'Payment added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $payment = Payment::findOrFail($id);

        return view('payment.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);

        return view('payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('slip')) {
            $requestData['slip'] = $request->file('slip')
                ->store('uploads', 'public');
        }

        $payment = Payment::findOrFail($id);
        $payment->update($requestData);

        return redirect('payment')->with('flash_message', 'Payment updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Payment::destroy($id);

        return redirect('payment')->with('flash_message', 'Payment deleted!');
    }
}
