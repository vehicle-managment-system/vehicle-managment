@extends('layouts.admin')
@section('content')
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Organization</th>
      <th scope="col">Name</th>
      <th scope="col">Archive number</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Adama</td>
      <td>02-03-2019</td>
      <td><a href="/detailrequest" class="btn btn-primary">Detail</a></td>
      <td><a href="#" class="btn btn-danger">Cancel</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Adama</td>
      <td>02-03-2019</td>
      <td><a href="/detailrequest" class="btn btn-primary">Detail</a></td>
      <td><a href="#" class="btn btn-danger">Cancel</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Adama</td>
      <td>02-03-2019</td>
      <td><a href="/detailequest" class="btn btn-primary">Detail</a></td>
      <td><a href="#" class="btn btn-danger">Cancel</a></td>
    </tr>
  </tbody>
</table>

@endsection