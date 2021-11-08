@extends ('layouts.app')
@section ('content')
<div class="row">
    <div class="col-md-6 ">
                <form action="{{url('update',$data->id)}}" mehthod="POST">
                {{ csrf_field() }}
                 
                  <div class="form-group">
                  <div class="mt-2">
                   <label>Name</label>
                   <input type="text" class="form-control" name="rno" value="{{$data->rno}}">
                  </div> 
                  <div class="mt-2">
                   <label>Name</label>
                   <input type="text" class="form-control" name="name" value="{{$data->name}}">
                  </div>
                  <div class="mt-2">
                   <label>Subject</label>
                   <input type="text" class="form-control" name="subject" value="{{$data->Subject}}">
                  </div>
                  <div class="mt-2">
                   <label>Title</label>
                   <input type="text" class="form-control" name="title" value="{{$data->title}}">
                  </div>
                  <div class="mt-2">
                   <label>Date</label>
                   <input type="date" class="form-control" name="date" value="{{$data->date}}">
                  </div>
                  <div class="mt-2">
                   <label>Percent</label>
                   <input type="text" class="form-control" name="percent" value="{{$data->percent}}">
                  </div>
                  </div>
                  <div class="form-group">
                  <button class="btn btn-sm btn-success text-white">Update</button>
                  </div>
                </form>
                <a href="{{url('list')}}">Back</a>
        </div>
    </div>
    
@endsection