@extends('layouts.main')

@section('content')

<div class="container mx-auto">

    <h1 class="text-3xl font-bold mt-3 mb-16">Detail Data Karyawan</h1>


    <a href="/karyawan/create" class="bg-green-500 px-5 py-3 rounded-2xl font-bold text-white hover:bg-green-600"><i class="fa-solid fa-circle-plus"></i> Tambah data</a>
    <div class="overflow-x-auto shadow-md sm:rounded-xl mt-5">
        <table class="w-full text-sm text-center">
            <thead class="bg-gray-100 text-basic border">
                <tr>
                    <th class="py-3 border-r">NO</th>
                    <th class="py-3 border-r">NIP</th>
                    <th class="py-3 border-r">NAMA</th>
                    <th class="py-3 border-r">JENIS KELAMIN</th>
                    <th class="py-3 border-r">GOL</th>
                    <th class="py-3 border-r">NAMA GOLONGAN</th>
                    <th class="py-3">AKSI</th>
                </tr>
            </thead>
            <tbody class="text-base">
                @foreach ($karyawan as $k)
                    
                <tr class="bg-white border">
                    <td class="py-4 border">{{ $k->id }}</td>
                    <td class="py-4 border">{{ $k->nip }}</td>
                    <td class="py-4 border">{{ $k->nama }}</td>
                    <td class="py-4 border">{{ $k->jenis_kelamin }}</td>
                    <td class="py-4 border">{{ $k->golongan_id }}</td>
                    <td class="py-4 border">
                        @if ($k->golongan_id == 'IIa') 
                            Pengatur Muda
                            @elseif($k->golongan_id == 'IIIa')
                            Penata Muda
                            @elseif($k->golongan_id == 'IIIb')
                            Penata Muda Tingak 1
                            @elseif($k->golongan_id == 'IIIc')
                            Penata
                            @elseif($k->golongan_id == 'IIId')
                            Penata Muda Tingak 2
                            @else
                            -
                        @endif

                    </td>
                    <td class="py-4 border">
                        <div class="flex justify-center">
                            <a href="/detail" class="px-5 py-2 bg-green-500 text-white rounded-xl hover:bg-green-600 font-bold">Detail</a>
                        {{-- <a href="" class="px-5 py-2 bg-red-500 text-white rounded-xl hover:bg-red-600 font-bold">Hapus</a> --}}
                        <form action="/karyawan/{{$k->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="px-5 py-2 mx-2 font-bold bg-red-500 text-white rounded-xl hover:bg-red-600 cursor-pointer">
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        {{ $karyawan -> links()}}
    </div>
    
</div>
    
@endsection