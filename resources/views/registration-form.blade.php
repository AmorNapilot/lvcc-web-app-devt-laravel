@extends('layouts.myapp')

@section('content')

<h1>Registration Form</h1>
<form method="POST" action="/process-registration">

	{{ csrf_field() }}

	Name: <input type="text" name="full_name"><br>
	Age: <input type="number" name="age"><br>
	Address: <textarea name="address" rows="4" cols="30"></textarea><br>
	<input type="submit" value="Register">
</form>

@endsection