@extends('layouts.admin')
@section('content')
   
<p>Name: <label class="pl-10" for="">name</label></p>
<p>Archive number:</p>
<p>number of person:</p>
<p>location:</p>
<p>start date:</p>
<p>end date:</p>
<p>reason:</p>
<p>Name of requester:</p>
<p>Name of requested person:</p>
<p>Name of car assigner:</p>
<p>Driver Name:</p>

 <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>e</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
</table> 
 @foreach ($sample as $sample )
      <li>  {{ $sample->Name }}</li>
@endforeach

@endsection