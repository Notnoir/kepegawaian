@extends('layouts.crud')
@section('content')
    <div class="mx-auto mt-28 bg-gray-300 shadow-md p-10 w-1/4 rounded-xl">
        <h1 class="font-bold text-4xl mb-10 text-center">Login</h1>
            <form action="{{route('postlogin')}}" method="post">
                {{ csrf_field() }}
                <div class="flex flex-col mb-5">
                    <label class="form-label font-bold mb-2">Email address</label>
                    <input type="email" name="email" class="form-control rounded-xl px-3 py-1" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="flex flex-col mb-5">
                    <label for="inputPassword" class="form-label font-bold mb-2">Password</label>
                      <input type="password" name="password" class="form-control rounded-xl px-3 py-1" id="inputPassword">
                </div>
                <div class="flex">
                    <div class="flex flex-col mb-5 mr-5 text-blue-500 hover:text-blue-700">
                        <a href="/registrasi">Belum memiliki akun?</a>
                    </div>
                    <div class="form-check mb-5">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember Me
                        </label>
                    </div>
                </div>
                
                <div class="flex justify-center mt-3">
                    <button class="bg-slate-900 px-20 py-2 rounded-2xl hover:bg-black font-bold text-white">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection