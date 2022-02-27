<x-bootstrap-theme>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Order</div>
                    <div class="card-body">
                        <a href="{{ url('/order/create') }}" class="btn btn-success btn-sm" title="Add New Order">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/order') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>#order id</th>
                                    <th>Date</th>
                                    <th>User Id</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Checking</th>
                                    <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->total }}</td>
                                        <td>
                                @switch($item->status)
                                @case("created") 
                                        <div>รอหลักฐานการชำระเงิน</div>
                                        <a class="btn btn-sm btn-warning" href="{{ url('payment/create?order_id='.$item->id) }}">ส่งหลักฐาน</a>
                                        @break
                                        @case("checking") 
                                        <div>รอตรวจสอบ</div>
                                        <div><img src="{{ asset("storage/{$item->payment->slip}")  }}" width="100" /></div>
                                        @if(Auth::user()->role == "admin")
                                        <form method="POST" action="{{ url('/order/' . $item->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                        {{ method_field('PATCH') }}
                                                        {{ csrf_field() }}
                                                        <select class="" name="status" id="status" >
                                                     <option value="paid">ชำระเงินเรียบร้อย</option>
                                                    <option value="cancelled">ยกเลิกออร์เดอร์</option>
                                                  </select>
                                                 <button class="btn btn-primary btn-sm" type="submit">เปลี่ยนสถานะ</button>       
                                                  </form>
                                              @endif
                                                    @break
                                                @case("paid") 
                                                    <div>ชำระเงินแล้ว รอเลข tracking</div>
    @if(Auth::user()->role == "admin")
    <form method="POST" action="{{ url('/order/' . $item->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}                                                            
        <input name="tracking" type="text" id="tracking" value="" placeholder="ใส่เลข tracking...">
        <input name="status" type="hidden" id="status" value="completed" >
        <button class="btn btn-primary btn-sm" type="submit">ส่งเลข Tracking</button>       
    </form>
    @endif

                                @break
                                                @case("completed") 
                                                    <div>ส่งสินค้าแล้ว</div>
                                                    <div>เลขติดตามพัสดู</div>
                                                    <div>{{ $item->tracking }}</div>
                                                @break
                                            @endswitch
                                        </td>
                                    <td>{{ $item->checking}}
                                    <div>{{ $item->tracking }}</div></td>
                                    
                                    <td>
                                            <a href="{{ url('/order/' . $item->id) }}" title="View Order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/order/' . $item->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/order' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Order" onclick="return confirm('Confirm delete?';)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $order->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-bootstrap-theme>
