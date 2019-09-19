@extends('layouts.admin')
@section('content')


    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">From Office</th>
          <th scope="col">Team Leader Name</th>
          <th scope="col">Location</th>
          <th scope="col" colspan="2">Action</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>OSTA</td>
          <td>Derara</td>
          <td>Adama</td>
          <td><input type="submit" name="approve" class="btn btn-primary btn-sm" value="Approve"></td>
          <td><input type="submit" name="approve" class="btn btn-danger btn-sm" value="Reject"></td>
          <td><a href="/detailresource"><input type="submit" name="approve" class="btn btn-secondary btn-sm" value="Detail"></a></td>


        </tr>
        <tr>
          <th scope="row">2</th>
          <td>ICT</td>
          <td>Birhnau</td>
          <td>Holeta</td>
          <td><input type="submit" name="approve" class="btn btn-primary btn-sm" value="Approve"></td>

          <td><input type="submit" name="approve" class="btn btn-danger btn-sm" value="Reject"></td>
          <td><input type="submit" name="approve" class="btn btn-secondary btn-sm" value="Detail"></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Water Resource</td>
          <td>Mama</td>
          <td>Ambo</td>
          <td><input type="submit" name="approve" class="btn btn-primary btn-sm" value="Approve"></td>

          <td><input type="submit" name="approve" class="btn btn-danger btn-sm" value="Reject"></td>
          <td><input type="submit" name="approve" class="btn btn-secondary btn-sm" value="Detail"></td>
        </tr>
      </tbody>
    </table>
 
@endsection