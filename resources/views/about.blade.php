@extends('layouts.main')

@section('container')
<h1>About</h1>
<h2>{{ $name }}</h2>
<h3>{{ $email }}</h3>
<img src="media/{{ $image }}" alt="{{ $name }}" width="250px" class="img-thumbnail rounded-circle">
@endsection

