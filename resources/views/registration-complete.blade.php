@extends('layouts.myapp')

@section('content')

<h1>Registration complete</h1>

<h3>Name: {{ $full_name }}</h3>
<h3>Age: {{ $age }}</h3>
<h3>Address: {{ $address }}</h3>

@endsection