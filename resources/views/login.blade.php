@extends('layouts.secundary')
@section('title', 'login')
@section('content')
<div
    class="h-screen w-screen grow flex flex-col items-center justify-center bg-gradient-to-r bg-indigo-400">

    <div class="px-5 py-6 flex flex-col mt-4 bg-white shadow-lg rounded-lg z-10">
        <div class="flex flex-col gap-4">
            <h3 class="text-2xl font-bold">Login</h3>
        </div>
        <form method="POST">
            @csrf
            <div class="mt-4">
                <div>
                    @error('error')
                    <p class="msg-error">{{ $message }}</p>
                    @enderror
                    <label class="block" for="email">
                        Email
                    </label>
                    <input id="email" type="email" name="email"
                        class="w-full px-4 py-2 mt-2 border @error('email') border-red-500 @enderror rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        @error('email')
                            <span class="msg-error">{{$message}}</span>
                        @enderror
                </div>
                <div class="mt-4">
                    <label class="block">
                        Senha
                    </label>
                    <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 mt-2 border @error('password') border-red-500 @enderror rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    @error('password')
                        <span class="msg-error">{{$message}}</span>
                    @enderror
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 w-full my-4 px-4 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    Login
                </button>
                @if (\Session::has('success'))
                    <div class="msg-success text-indigo-300">
                        {{ \Session::get('success') }}
                    </div>
                @endif
                <div class="pt-4">
                    <span class="pt-4">Ainda não tem conta?
                        <a href="{{route('user.register')}}" class="text-indigo-400 hover:underline">
                            Cadastre-se
                        </a>
                    </span>
                </div>

                <div class="pt-4">
                    <span class="pl-16">
                        <a href="{{route('hero')}}" class="text-indigo-400 hover:underline">
                            Pagina Principal
                        </a>
                    </span>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
