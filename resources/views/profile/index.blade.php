<x-bootstrap-theme>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        <a href="{{ url('/profile/create') }}" class="btn btn-success btn-sm" title="Add New Profile">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/profile') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Issue Date</th>
                                        <th>Expire Date</th>
                                        <th>Name</th>
                                        <th>Birth Date</th>
                                        <th>Id No</th>
                                        <th>User Id</th>
                                        <th>User Email</th>
                                        <th>User Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($profile as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->issue_date }}</td>
                                        <td>{{ $item->expire_date }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->birth_date }}</td>
                                        <td>{{ $item->id_no }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ isset($item->user->email) ? $item->user->email : "" }}</td>
                                        <td>{{ isset($item->user->role) ? $item->user->role : ""}}</td>
                                        <td>
                                            <a href="{{ url('/profile/' . $item->id) }}" title="View Profile"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/profile/' . $item->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/profile' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm('Confirm delete?';)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $profile->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-bootstrap-theme>
