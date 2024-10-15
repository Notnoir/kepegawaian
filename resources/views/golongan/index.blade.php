@extends('layouts.main')

@section('content')

<div class="container mx-auto">

    <h1 class="text-3xl font-bold mt-3 mb-16">Data Golongan</h1>


    <a href="/golongan/create" class="bg-green-500 px-5 py-3 rounded-2xl font-bold text-white hover:bg-green-600"><i class="fa-solid fa-circle-plus"></i> Tambah data</a>
    <div class="overflow-x-auto shadow-md sm:rounded-xl mt-5">
        <table class="w-full text-sm text-center">
            <thead class="bg-gray-100 text-basic border">
                <tr>
                    <th class="py-3 border-r">NO</th>
                    <th class="py-3 border-r">KODE GOLONGAN</th>
                    <th class="py-3 border-r">NAMA GOLONGAN</th>
                    <th class="py-3">AKSI</th>
                </tr>
            </thead>
            <tbody class="text-base">
                @foreach ($golongan as $g)
                    
                <tr class="bg-white border">
                    <td class="py-4 border">{{ $g->id }}</td>
                    <td class="py-4 border">{{ $g->kode_golongan }}</td>
                    <td class="py-4 border">{{ $g->nama_golongan }}</td>
                    <td class="py-4 border">
                        <div class="flex justify-center">
                            <a href="/golongan/{{$g->id}}/edit" class="px-5 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-600 font-bold">Edit</a>
                        {{-- <a href="" class="px-5 py-2 bg-red-500 text-white rounded-xl hover:bg-red-600 font-bold">Hapus</a> --}}
                        <form action="/golongan/{{$g->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="px-5 py-2 mx-2 font-bold bg-red-500 text-white rounded-xl hover:bg-red-600 cursor-pointer">
                        </form>
                        <a href="/detail" class="px-5 py-2 bg-green-500 text-white rounded-xl hover:bg-green-600 font-bold">Detail</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
    
@endsection