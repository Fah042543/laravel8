<x-bootstrap-theme>
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Order {{ $order->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/order') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/order/' . $order->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('order' . '/' . $order->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Order" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $order->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $order->user_id }} </td></tr><tr><th> Remark </th><td> {{ $order->remark }} </td></tr><tr><th> Total </th><td> {{ $order->total }} </td></tr><tr><th> Status </th><td> {{ $order->status }} </td></tr><tr><th> Checking At </th><td> {{ $order->checking_at }} </td></tr><tr><th> Paid At </th><td> {{ $order->paid_at }} </td></tr><tr><th> Cancelled At </th><td> {{ $order->cancelled_at }} </td></tr><tr><th> Completed At </th><td> {{ $order->completed_at }} </td></tr><tr><th> Tracking </th><td> {{ $order->tracking }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-bootstrap-theme>