@extends('layouts.crud')

@section('content')

<div class=" container mx-auto border border-neutral-400 w-96 mt-10 text-center rounded-lg p-10">
    <h1 class="font-bold text-3xl">EDIT DATA</h1>
    <form action="/karyawan/{{$karyawan->id}}" method="POST">
        @method('put')
        @csrf
        <input type="text" name="id" placeholder="ID" class="form-control px-10 py-3 mb-5 rounded-xl mt-10" value="{{$karyawan->id}}"> <br>
        <input type="text" name="nip" placeholder="Nip" class="form-control px-10 py-3 mb-5 rounded-xl" value="{{$karyawan->nip}}"> <br>
        <input type="text" name="nama" placeholder="Nama" class="form-control px-10 py-3 mb-5 rounded-xl" value="{{$karyawan->nama}}"> <br>
        <input type="text" name="agama" placeholder="Agama" class="form-control px-10 py-3 mb-5 rounded-xl" value="{{$karyawan->agama}}"> <br>
        <div class="flex justify-center mb-5">
            <select name="jenis_kelamin" class="rounded-lg p-3 mr-5">
                <option value="pria" @if ($karyawan->jenis_kelamin == "pria") selected @endif>Pria</option>    
                <option value="wanita" @if ($karyawan->jenis_kelamin == "wanita") selected @endif>Wanita</option>
            </select> <br>
            <select name="status_nikah" class="rounded-lg p-3">
                <option value="belum nikah" @if ($karyawan->status_nikah == "belum nikah") selected @endif>Belum menikah</option>    
                <option value="nikah" @if ($karyawan->status_nikah == "nikah") selected @endif>Sudah menikah</option>
            </select> <br>
        </div>
        <select name="golongan_id" class="rounded-lg p-3 mb-5">
            <option value="IIa" @if ($karyawan->golongan_id == "IIa") selected @endif>IIa</option>    
            <option value="IIIa" @if ($karyawan->golongan_id == "IIIa") selected @endif>IIIa</option>
            <option value="IIIb" @if ($karyawan->golongan_id == "IIIb") selected @endif>IIIb</option>
            <option value="IIIc" @if ($karyawan->golongan_id == "IIIc") selected @endif>IIIc</option>
            <option value="IIId" @if ($karyawan->golongan_id == "IIId") selected @endif>IIId</option>
        </select> <br>
        <input type="submit" name="submit" value="Save" class="bg-green-400 px-5 py-2 hover:bg-green-500 rounded-xl text-white">
        <a href="/karyawan" class="bg-red-500 px-5 py-2 hover:bg-red-600 rounded-xl text-white">Cancel</a>
    </form>
</div>
    
@endsection