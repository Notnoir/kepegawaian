@extends('layouts.crud')

@section('content')

<div class=" container mx-auto border border-neutral-400 w-1/3 mt-10 text-center rounded-lg p-10">
    <h1 class="font-bold text-3xl">EDIT DATA</h1>
    <form action="/golongan/{{$golongan->id}}" method="POST">
        @method('put')
        @csrf
        <input type="text" name="id" placeholder="Id" class="form-control px-10 py-3 mb-5 rounded-xl mt-10" value="{{$golongan->id}}"> <br>
        <input type="text" name="kode_golongan" placeholder="Kode Golongan" class="form-control px-10 py-3 mb-5 rounded-xl" value="{{$golongan->kode_golongan}}"> <br>
        <input type="text" name="nama_golongan" placeholder="Nama Golongan" class="form-control px-10 py-3 mb-5 rounded-xl" value="{{$golongan->nama_golongan}}"> <br>
        <input type="submit" name="submit" value="Save" class="bg-green-400 px-5 py-2 hover:bg-green-500 rounded-xl text-white">
        <a href="/golongan" class="bg-red-500 px-5 py-2 hover:bg-red-600 rounded-xl text-white">Cancel</a>
    </form>
</div>
    
@endsection