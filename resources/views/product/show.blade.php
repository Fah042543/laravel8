<x-themequiz title="">
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Product {{ $product->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/product/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('product' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $product->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $product->title }} </td></tr><tr><th> Content </th><td> {{ $product->content }} </td></tr><tr><th> Price </th><td> {{ $product->price }} </td></tr><tr><th> Cost </th><td> {{ $product->cost }} </td></tr><tr><th> Photo </th><td> <img src="{{ url('storage/'.$product->photo )}}" width="100" /></td> </tr><tr><th> Quantity </th><td> {{ $product->quantity }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                         <form method="POST" action="{{ url('/order-product') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input class="d-none" name="order_id" type="number" id="order_id" value="" >                                
                            <input class="d-none" name="product_id" type="number" id="product_id" value="{{ $product->id }}" >                                
                            <input class="d-none" name="user_id" type="number" id="user_id" value="" >                                
                            <input class="" name="quantity" type="number" id="quantity" value="1" >                                
                            <input class="d-none" name="price" type="number" id="price" value="{{ $product->price }}" >                                
                            <input class="d-none" name="total" type="number" id="total" value="" >

                            <button type="submit" class="btn btn-sm btn-warning" >
                                <i class="fa fa-shopping-cart"></i> เพิ่มสินค้าลงตะกร้า
                             </button>   

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-themequiz>