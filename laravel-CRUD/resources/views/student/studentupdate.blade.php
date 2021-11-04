@extends ('layouts.app')
@section ('content')
<div class="row">
    <div class="col-md-6 ">
                <form action="{{url('studentupdate',$studentdata->id)}}" mehthod="POST">
                {{ csrf_field() }}
                 
                  <div class="form-group">
                  <div class="mt-2">
                   <label>Name</label>
                   <input type="text" class="form-control" name="rno" value="{{$studentdata->rno}}">
                  </div> 
                  <div class="mt-2">
                   <label>Name</label>
                   <input type="text" class="form-control" name="name" value="{{$studentdata->name}}">
                  </div>
                  <div class="mt-2">
                   <label>Email</label>
                   <input type="text" class="form-control" name="email" value="{{$studentdata->email}}">
                  </div>
                  <div class="mt-2">
                   <label>Phone Number</label>
                   <input type="text" class="form-control" name="phno" value="{{$studentdata->phone_number}}">
                  </div>
                  <div class="mt-2">
                   <label>Address</label>
                   <textarea cols="30" class="form-control" rows="3" name="address"> {{$studentdata->address}}</textarea>
                  </div>

                  </div>
                  <div class="form-group">
                  <button class="btn btn-sm btn-success text-white">Update</button>
                  </div>
                </form>
                <a href="{{url('/')}}">Back</a>
        </div>
        
    </div>
   
@endsection