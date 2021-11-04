@extends ('layouts.app')
@section ('content')
<div class="row">
    <div class="col-md-6 ">
                <form action="{{ route('student#store')}}" mehthod="POST">
                {{ csrf_field() }}
                  <div class="form-group">
                  <div class="mt-2">
                   <label>Rno</label>
                   <input type="text" class="form-control" name="rno">
                  </div>
                  <div class="mt-2">
                   <label>Name</label>
                   <input type="text" class="form-control" name="name">
                  </div>
                  <div class="mt-2">
                   <label>Email</label>
                   <input type="text" class="form-control" name="email">
                  </div>
                  <div class="mt-2">
                   <label>Phone Number</label>
                   <input type="text" class="form-control" name="phno">
                  </div>
                  <div class="mt-2">
                   <label>Address</label>
                   <textarea cols="30" class="form-control" rows="3" name="address"></textarea>
                  </div>
                </div>
                  <div class="form-group ">
                  <button type="submit" class="btn btn-sm btn-primary text-white ">Save</button>
                  </div>
                </form>
                <a href="{{url('/')}}">Back</a>
        </div>
    </div>
   
@endsection