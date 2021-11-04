@extends ('layouts.app')
@section ('content')
<div class="row">
    <div class="col-md-6 ">
                <form action="{{ route('std#store')}}" mehthod="POST">
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
                   <label>Subject</label>
                   <input type="text" class="form-control" name="subject">
                  </div>
                  <div class="mt-2">
                   <label>Title</label>
                   <input type="text" class="form-control" name="title">
                  </div>
                  <div class="mt-2">
                   <label>Date</label>
                   <input type="date" class="form-control" name="date">
                  </div>
                  <div class="mt-2">
                   <label>Percent</label>
                   <input type="text" class="form-control" name="percent">
                  </div>
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-sm btn-success text-white">Save</button>
                  </div>
                </form>
                <a href="{{url('list')}}">Back</a>
        </div>
    </div>
    
@endsection