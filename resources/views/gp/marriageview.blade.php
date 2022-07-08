@extends('gp.gpindex')
@section('gpindex')
<section>
    <div class="container">
        <div class="table">
            <h1>
                <center><b> View Marriage Cerificate</b></center>
            </h1>
            <br><br>
            <table class="table table-hover table-dark">
                <tr>
                    <th>ID</th>
                    <th>Certificate Type</th>
                    <th>User ID</th>
                    <th> Status</th>    
                    <th>Verification</th>
                </tr>
                @foreach($marriage as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->mtype}}</td>
                    <td>{{$value->userid}}</td>
                    <td>{{$value->status}}</td>
                    <td><a href="/approvem/{{$value->id}}">approve</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection