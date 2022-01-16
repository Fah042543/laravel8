<x-bootstrap-theme>
<h1>Create New Covid Record</h1>
<form method="POST" action="{{ url('/covid19') }}" enctype="multipart/form-data" style="width:50%">
    @method('POST')
    @csrf

    @include ('covid19.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Create">
    </div>

</form>
</x-bootstrap-theme>
