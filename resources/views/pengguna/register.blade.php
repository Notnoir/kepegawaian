
    {{-- <div class="card p-5 position-absolute top-50 start-50 translate-middle" style="width: 500px">
        <div class="card-header text-center fw-bolder fs-3">
          Register
        </div>
        <div class="card-body">
            <form action="{{ route('simpanregistrasi') }}" method="post">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-check">
                    <label for="">Level</label>
                    <input type="text" name="level">
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
                <div class="mb-5 pb-5">
                    <a href="/login">Sudah memiliki akun?</a>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div> --}}
@extends('layouts.crud')
@section('content')
        <div class="mx-auto mt-20 bg-gray-300 shadow-md p-10 w-1/4 rounded-xl">
            <h1 class="font-bold text-4xl mb-10 text-center">Registrasi</h1>
            <form action="{{ route('simpanregistrasi') }}" method="post">
                {{ csrf_field() }}
                <div class="flex flex-col mb-5">
                    <label for="exampleFormControlInput1" class="form-label font-bold mb-2">Nama</label>
                    <input type="text" name="name" class="form-control rounded-xl px-3 py-1">
                </div>
                <div class="flex flex-col mb-5">
                    <label for="" class="font-bold  mb-2">Level</label>
                    <input type="text" name="level" class="form-control rounded-xl px-3 py-1">
                  </div>
                <div class="flex flex-col mb-5">
                    <label for="exampleFormControlInput1" class="form-label font-bold  mb-2">Email address</label>
                    <input type="email" name="email" class="form-control rounded-xl px-3 py-1" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="flex flex-col mb-5 row">
                    <label for="inputPassword" class="form-label font-bold  mb-2">Password</label>
                      <input type="password" name="password" class="form-control rounded-xl px-3 py-1" id="inputPassword">
                </div>
                <div class="mb-5 pb-5 text-blue-500 hover:text-blue-700">
                    <a href="/login">Sudah memiliki akun?</a>
                </div>
                <div class="flex justify-center mt-3">
                    <button class="bg-slate-900 px-20 py-2 rounded-2xl hover:bg-black font-bold text-white">Register</button>
                </div>
            </form> 
            </div>
        </div>
@endsection
