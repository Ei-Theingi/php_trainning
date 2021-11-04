@extends('layouts.app')
@section ('content')
<div class="row"> 
    <div class="col-lg-10" >
    <div class="col">
        <a href="{{url('/')}}"><button class="btn btn-secondary">Student</button></a>
        <a href="{{url('list')}}"><button class="btn btn-secondary">Data</button></a>
        </div>
        <h2 class="text-center">STUDENT DATA </h2>
        
        <div class="float-right">
        <a href="{{url('studentadd')}}"><button class="btn btn-secondary">Add</button></a>
        <a href="{{route('data#download')}}"><button class="btn btn-secondary">Download CSV</button></a>
        </div>
    </div>
    <form action="{{route('st#search')}}" method="get">
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
        <th>email</th>
        <th>Phone Number</th>
        <th>address</th>
        <th>Action</th>
    </thread>
     <tbody>
       @foreach($student as $item)
         <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->rno}}</td>
             <td>{{$item->name}}</td>
             <td>{{$item->email}}</td>
             <td>{{$item->phone_number}}</td>
             <td>{{$item->address}}</td>
             
             <td>
         <a href="{{route('student#update',$item->id)}}" ><button class="btn btn-sm btn-success text-white">Edit</button></a>       
          <a href="{{route('student#delete',$item->id)}}"><button class="btn btn-sm btn-danger text-white">Delete</button></a>     
             </td>
         </tr>
         @endforeach
     </tbody>   
</table>

@endsection