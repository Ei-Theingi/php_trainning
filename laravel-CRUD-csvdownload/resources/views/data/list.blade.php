@extends('layouts.app')
@section ('content')
<div class="row">
    <div class="col-lg-10" >
    <div class="col-7">
        <a href="{{url('/')}}"><button class="btn btn-secondary">Student</button></a>
        <a href="{{url('list')}}"><button class="btn btn-secondary">Data</button></a>
        
        </div>
        <h2 class="text-center">DATA</h2>
     <a href="{{url('add')}}"><button class="btn btn-secondary">Add</button></a>
    <a href="{{route('data#upload')}}"><button class="btn btn-secondary">Download CSV</button></a>
    <a href="{{url('datamail1')}}"><button class="btn btn-secondary ml-5">Mail1</button></a>
        <a href="{{url('datamail2')}}"><button class="btn btn-secondary">Mail2</button></a>
        <a href="{{url('datamail3')}}"><button class="btn btn-secondary">Mail3</button></a>

    </div>
    <form action="{{route('data#search')}}" method="get">
        <div class="input-group mb-3 mt-lg-4">
            <input type="text" class="form-control">
            <span class="input-group-append">
            <button type="submit" class="btn btn-light ">search</button>
          </span>   
        </div>
</form>
</div>

<table class="table table-bordered table-responsive-lg">
    <thread>
        <th>ID</th>
        <th>Rno</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Title</th>
        <th>Date</th>
        <th>Percent</th>
        <th>Action</th>
    </thread>
     <tbody>
       @foreach($data as $item)
         <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->rno}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->Subject}}</td>
             <td>{{$item->title}}</td>
             <td>{{$item->date}}</td>
             <td>{{$item->percent}}</td>
             <td>
         <a href="{{route('std#update',$item->id)}}" ><button class="btn btn-sm btn-success text-white">Edit</button></a>       
          <a href="{{route('std#delete',$item->id)}}"><button class="btn btn-sm btn-danger text-white">Delete</button></a>     
             </td>
         </tr>
         @endforeach
     </tbody>   
</table>


@endsection