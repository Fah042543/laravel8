<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderProduct;
use App\Models\Product;

class OrderController extends Controller
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

        switch(Auth::user()->role)
        {
            case "admin" : 
                $order = Order::latest()->paginate($perPage);
                break;
            default : 
                //means guest
                $order = Order::where('user_id',Auth::id() )->latest()->paginate($perPage);            
        } 
        // if (!empty($keyword)) {
        //     $order = Order::where('user_id', 'LIKE', "%$keyword%")
        //         ->orWhere('remark', 'LIKE', "%$keyword%")
        //         ->orWhere('total', 'LIKE', "%$keyword%")
        //         ->orWhere('status', 'LIKE', "%$keyword%")
        //         ->orWhere('checking_at', 'LIKE', "%$keyword%")
        //         ->orWhere('paid_at', 'LIKE', "%$keyword%")
        //         ->orWhere('cancelled_at', 'LIKE', "%$keyword%")
        //         ->orWhere('completed_at', 'LIKE', "%$keyword%")
        //         ->orWhere('tracking', 'LIKE', "%$keyword%")
        //         ->latest()->paginate($perPage);
        // } else {
        //     $order = Order::latest()->paginate($perPage);
        // }

        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('order.create');
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
        //รวมราคาสินค้าในตะกร้า
        $total = OrderProduct::whereNull('order_id')
            ->where('user_id', Auth::id() )->sum('total');
        //กำหนดราคารวม, ผู้ใช้, สถานะ
        $requestData['total'] = $total;
        $requestData['user_id'] = Auth::id();
        $requestData['status'] = "created";        
        //CREATE ORDER      
        $order = Order::create($requestData);
        //UPDATE ORDER ID ในตาราง order_product สำหรับคอลัมน์ที่ order_id เป็น null
        OrderProduct::whereNull('order_id')
            ->where('user_id', Auth::id() )->update(['order_id'=> $order->id]);
        //ปรับลดสินค้าในสต๊อก
        $order_products = $order->order_products;
        foreach($order_products as $item)
        {
            Product::where('id',$item->product_id)->decrement('quantity', $item->quantity);
        }
        
        return redirect('order')->with('flash_message', 'Order added!');
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
        $order = Order::findOrFail($id);

        return view('order.show', compact('order'));
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
        $order = Order::findOrFail($id);

        return view('order.edit', compact('order'));
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
        
        $order = Order::findOrFail($id);
        $order->update($requestData);

        return redirect('order')->with('flash_message', 'Order updated!');
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
        Order::destroy($id);

        return redirect('order')->with('flash_message', 'Order deleted!');
    }
}
