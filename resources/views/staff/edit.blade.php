<x-bootstrap-theme>
<h1>Edit Staff</h1>

<form method="POST" action="{{ url('/staff/' . $staff->id) }}" enctype="multipart/form-data" style="width:50%">
    @method('PATCH')
    @csrf

    @include ('staff.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Update">
    </div>

</form>
</x-bootstrap-theme>