@extends('layouts.main')

@section('content')

<div class="container mx-auto">

    
    <h1 class="text-3xl font-bold mt-3 mb-16">Data Karyawan</h1>

        
        <a href="/karyawan/create" class="bg-green-500 px-5 py-3 rounded-2xl font-bold text-white hover:bg-green-600 focus:ring-2 focus:ring-green-400"><i class="fa-solid fa-circle-plus"></i> Tambah data</a>
        
        <form action="/karyawan" method="GET"> 
            <div class="relative border-2 rounded-full focus:ring-sims mt-5">
                <input type="text" id="search" name="search" placeholder="Search" class="py-2 pl-5 pr-20 border-none rounded-full">
                <i class="fa-solid fa-magnifying-glass pr-5 pl-3 text-slate-600"></i>
            </div>
        </form>

        {{-- <div class="relative border-2 rounded-full focus:ring-sims mt-5">
            <input type="search" id="search" name="search" placeholder="Search" class="py-2 pl-5 pr-20 border-none rounded-full">
            <i class="fa-solid fa-magnifying-glass pr-5 pl-3 text-slate-600"></i>
        </div> --}}
        
    
    <div class="overflow-x-auto shadow-md sm:rounded-xl mt-5">
        <table class="w-full text-sm text-center">
            <thead class="bg-gray-100 text-basic border">
                <tr>
                    <th class="py-3 border-r">NO</th>
                    <th class="py-3 border-r">NIP</th>
                    <th class="py-3 border-r">NAMA</th>
                    <th class="py-3 border-r">JENIS KELAMIN</th>
                    <th class="py-3 border-r">STATUS</th>
                    <th class="py-3 border-r">GOL</th>
                    <th class="py-3 border-r">AGAMA</th>
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
                    <td class="py-4 border">{{ $k->status_nikah }}</td>
                    <td class="py-4 border">{{ $k->golongan_id }}</td>
                    <td class="py-4 border">{{ $k->agama }}</td>
                    <td class="py-4 border">
                        <div class="flex justify-center">
                            <a href="/karyawan/{{$k->id}}/edit" class="px-5 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-600 font-bold">Edit</a>
                        {{-- <a href="" class="px-5 py-2 bg-red-500 text-white rounded-xl hover:bg-red-600 font-bold">Hapus</a> --}}
                        <form action="/karyawan/{{$k->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" onclick="return confirm('Yakin Hapus Data?')" class="px-5 py-2 mx-2 font-bold bg-red-500 text-white rounded-xl hover:bg-red-600 cursor-pointer">
                        </form>
                        <a href="/detail" class="px-5 py-2 bg-green-500 text-white rounded-xl hover:bg-green-600 font-bold">Detail</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tbody id="Content" class="searchdata"></tbody>
        </table>
    </div>
    <div class="mt-5">
        {{ $karyawan -> links()}}
    </div>

    @include('sweetalert::alert')

    
</div>

{{-- <script type="text/javascript">
    $('#search').on('keyup',function()
    {
        $value=$(this).val();

        if($value)
        {
            $('.alldata').hide();
            $('.searchdata').show();
        } else {
            $('.alldata').show();
            $('.searchdata').hide();
        }

        $.ajax({
            type:'get',
            url:'{{URL::to('search')}}',
            data:{'search':$value},

            success:function(data)
            {
                console.log(data);
                $('#Content').html(data);
            }
        });
    })
</script> --}}
    
@endsection
