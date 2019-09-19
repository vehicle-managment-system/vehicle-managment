@extends('layouts.admin')
@section('content')
  
    <h3>Detail</h3>
    <form class="well form-horizontal" action=" " method="post" id="contact_form">
      <fieldset>

        <!-- Text input-->

        <div class="form-group">

                  <div class="form-group">
                    <label class="col-md-4 control-label">From Office</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
                        <input name="" disabled class="form-control" type="text" value="OSTA">
                      </div>
                    </div>
                  </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Number of employes</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
                <input name="" class="form-control" disabled type="text" value="4">
              </div>
            </div>
          </div>
        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Team Leader Name</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
              <input name="" placeholder="Derara" disabled class="form-control" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Start Date</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
              <input name="" placeholder="2018-9-9"disabled class="form-control" type="text">
            </div>
          </div>
        </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">End Date</label>
                  <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                      {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
                      <input name="" placeholder="2019-10-8" disabled class="form-control" type="input">
                    </div>
                  </div>
                </div>

        <!-- Text input-->
        <div class="form-group">
          <div class="form-group">
            <label class="col-md-4 control-label">Location</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
                <input name="" disabled class="form-control" type="text" value="Adama">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Reason</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span> --}}
                <textarea class="form-control" name="" disabled placeholder="sample reason" ></textarea>
              </div>
            </div>
          </div><br>
        <div class="form-group" style="margin-left:30%;">
              <input type="submit" class="btn btn-primary" value="Approve">
              <input type="submit" class="btn btn-danger" value="Reject">
              <input type="submit" class="btn btn-secondary" value="Send to general director">

        </div>

      </fieldset>
    </form>
@endsection