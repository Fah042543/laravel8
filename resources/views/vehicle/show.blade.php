<x-bootstrap-theme>
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Vehicle {{ $vehicle->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/vehicle') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/vehicle/' . $vehicle->id . '/edit') }}" title="Edit Vehicle"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('vehicle' . '/' . $vehicle->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Vehicle" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $vehicle->id }}</td>
                                    </tr>
                                    <tr><th> Brand </th><td> {{ $vehicle->brand }} </td></tr><tr><th> Serie </th><td> {{ $vehicle->serie }} </td></tr><tr><th> Color </th><td> {{ $vehicle->color }} </td></tr><tr><th> Year </th><td> {{ $vehicle->year }} </td></tr><tr><th> Mileage </th><td> {{ $vehicle->mileage }} </td></tr><tr><th> User Id </th><td> {{ $vehicle->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-bootstrap-theme>