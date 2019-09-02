@extends('layouts.admin')
@section('content')
                <form>
                <div class="form-group">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Organization</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Archive Number</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Archive #">
                        </div>

                {{-- <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div> --}}



                <div class="form-group">
                    <label for="exampleFormControlSelect1">Number of Persons</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div> --}}

                 <div class="form-group">
                    <label for="exampleFormControlSelect1">Location</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Adama</option>
                    <option>Adama</option>
                    <option>Adama</option>
                    <option>Adama</option>
                    <option>Adama</option>
                    </select>
                </div>
                {{-- Date --}}
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            <label for="exampleInputPassword1">Start Date</label>
                            <input type="date" class="form-control" id="exampleInputPassword1">
                            

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            
                            <label for="exampleInputPassword1">End Date</label>
                            <input type="date" class="form-control" id="exampleInputPassword1">

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Reason</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your reason to go"></textarea>
                </div>
<hr>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="input" class="form-control" placeholder="Name of requester">
                            

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            
                            <label for="exampleInputPassword1">Signature</label>
                            <input type="input" class="form-control id="exampleInputPassword1">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            <label for="exampleInputPassword1">Name of requested person</label>
                            <input type="input" class="form-control" placeholder="Name of requested person">
                            

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            
                            <label for="exampleInputPassword1">Signature</label>
                            <input type="input" class="form-control id="exampleInputPassword1">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="input" class="form-control" placeholder="Name of car assigner">
                            

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                         <div class="form-group">
                            
                            <label for="exampleInputPassword1">Signature</label>
                            <input type="input" class="form-control id="exampleInputPassword1">

                        </div>
                    </div>
                </div>
           {{-- TODO : table generating pop up window-milito 6 table --}}
           <hr>
             <div class="row">
                    <div class="col-lg-4 col-md-4">
                         <div class="form-group">
                            <label for="exampleInputPassword1">Driver Name</label>
                            <input type="input" class="form-control" placeholder="Name of the driver">
                            

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         <div class="form-group">
                            
                            <label for="exampleInputPassword1">Signature</label>
                            <input type="input" class="form-control id="exampleInputPassword1">

                        </div>
                    </div>
                       <div class="col-lg-4 col-md-4">
                         <div class="form-group">
                            
                            <label for="exampleInputPassword1">Date</label>
                            <input type="Date" class="form-control id="exampleInputPassword1">

                        </div>
                     
                </div>
                <div class="">
                    <input type="submit" class="btn btn-primary">
                </div>
                
           </div>
                </form>
        
        


@endsection