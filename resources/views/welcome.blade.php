@extends('layouts.main')

@section('content')
    <h1 class="font-bold text-3xl bg-gray-300 px-5 py-3 rounded-3xl">Selamat datang {{auth()->user()->level}}</h1>
@endsection