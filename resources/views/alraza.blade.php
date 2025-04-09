@extends('layout')

@section('title')

All User Data

@endsection

@section('content')

 <a href="{{route('users.create')}}" class="btn btn-success btn-sm nb-3">Add New</a>
  <table class="table table-striped table-bordered">
      
      <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Email</td>
      <td>Address</td>
      <td>age</td>
      <td>City</td>
      <td>View</td>
      <td>Update</td>
       <td>Delete</td>
       </tr>
      @foreach ($users as $user )
          <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td> 
          <td>{{$user->email}}</td>
          <td>{{$user->address}}</td>
          <td>{{$user->age}}</td>
          <td>{{$user->city}}</td>
          <td><a href="{{route('users.show',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
          <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
          
          <td>
          <form action="{{route('users.destroy',$user->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </td>
          </form>
          </tr>
      @endforeach
 </table>

@endsection