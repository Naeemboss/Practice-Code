@extends('layout')

@section('title')

Add new User

@endsection

@section('content')

<form action="{{route('users.store')}}" method="POST">
@csrf
<div class="mb-3">
<label for="username" class="form-label">user Name</label>
<input type="text" class="form-control" name="username">
</div>

<div class="mb-3">
<label for="useremail" class="form-label">user Email</label>
<input type="email" class="form-control" name="useremail">
</div>

<div class="mb-3">
<label for="useraddress" class="form-label">user Address</label>
<input type="text" class="form-control" name="useraddress">
</div>

<div class="mb-3">
<label for="userage" class="form-label">user Age</label>
<input type="number" class="form-control" name="userage">
</div>

<div class="mb-3">
<label for="usercity" class="form-label">user City</label>
<input type="text" class="form-control" name="usercity">
</div>

<div class="mb-3">
 <input type="submit" value="Save" class="btn btn-success">
 </div>

</form>
@endsection