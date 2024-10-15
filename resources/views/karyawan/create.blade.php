@extends('layouts.crud')

@section('content')

<div class=" container mx-auto border border-neutral-400 w-1/3 mt-10 text-center rounded-lg p-10">
    <h1 class="font-bold text-3xl">TAMBAH DATA</h1>
    <form action="/karyawan/store" method="POST">
        @csrf
        <input type="text" name="id" placeholder="ID" class="form-control px-10 py-3 mb-5 rounded-xl mt-10"> <br>
        <input type="text" name="nip" placeholder="Nip" class="form-control px-10 py-3 mb-5 rounded-xl"> <br>
        <input type="text" name="nama" placeholder="Nama" class="form-control px-10 py-3 mb-5 rounded-xl"> <br>
        <input type="text" name="agama" placeholder="Agama" class="form-control px-10 py-3 mb-5 rounded-xl"> <br>
        <div class="flex justify-center mb-5">
            <select name="jenis_kelamin" class="rounded-lg p-3 mr-5">
                <option value="pria">Pria</option>    
                <option value="wanita">Wanita</option>
            </select> <br>
            <select name="status_nikah" class="rounded-lg p-3">
                <option value="belum nikah">Belum menikah</option>    
                <option value="nikah">Sudah menikah</option>
            </select> <br>
        </div>
        <select name="golongan_id" class="rounded-lg p-3 mb-5">
            <option value="IIa">IIa</option>    
            <option value="IIIa">IIIa</option>
            <option value="IIIb">IIIb</option>
            <option value="IIIc">IIIc</option>
            <option value="IIId">IIId</option>
        </select> <br>
        <input type="submit" name="submit" value="Save" class="bg-green-400 px-5 py-2 hover:bg-green-500 rounded-xl text-white">
        <a href="/karyawan" class="bg-red-500 px-5 py-2 hover:bg-red-600 rounded-xl text-white">Cancel</a>
    </form>
</div>
    
@endsection