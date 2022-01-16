<x-bootstrap-theme>

<h1> Covid19 #{{ $covid19->id }} </h1>
<table class="table table-sm" style="width:50%">
<tbody>
        <tr><th> ID </th><td>{{ $covid19->id }}</td></tr>
        <tr><th> Date  </th><td> {{ $covid19->date }} </td></tr>
        <tr><th> Country   </th><td> {{ $covid19->country }} </td></tr>
        <tr><th> Total   </th><td> {{ $covid19->total }} </td></tr>
        <tr><th> Active   </th><td> {{ $covid19->active }} </td></tr>
        <tr><th> Death   </th><td> {{ $covid19->death }} </td></tr>
        <tr><th> Recovered   </th><td> {{ $covid19->recovered }} </td></tr>
        <tr><th> Total_in_1m   </th><td> {{ $covid19->total_in_1m }} </td></tr>
        <tr><th> Remark   </th><td> {{ $covid19->remark }} </td></tr>
    </tbody>
</table>
</x-bootstrap-theme>






