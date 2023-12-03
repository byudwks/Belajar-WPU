@extends('layouts.main')

@section('container')
<div class ="card-body text-center">
  <h1 class = "mb-5 ">Pemilik Web</h1>
  <h5>{{ $nama }}</h5>
  <p>{{ $email }}</p>
  <img src="{{$image}}" alt="{{ $nama }}" width="250" class = "img-tumbhnail rounded-circle">
</div>
@endsection 