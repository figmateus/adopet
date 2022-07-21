@extends('layouts.default')
@section('title','AdoPet')
<link rel="icon" href="{!! asset('icons/pawprint.png') !!}"/>
@section('content')
      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-1 lg:mt-20 lg:px-1/2 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold xl:pt-35 text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline">AdoPet</span><br>
              <span class="block text-indigo-600 xl:inline">Sistema de adoção</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-1 md:text-xl lg:mx-0">O AdoPet é um sistema criado com a intenção de aproximar você de um novo amiginho que precisa de um lar.</p>
          </div>
          <div class="mt-5 sm:mt-4 sm:flex sm:justify-center sm:pt-4 lg:justify-start">
            <div class="p-1 rounded-md shadow md:px-2">
              <a href="{{route('user.register')}}" class="w-full flex items-center justify-center  px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Quero Adotar </a>
            </div>
            <div class="p-1 rounded-md shadow">
              <a href="{{route('pet.register')}}" class="w-full flex items-center justify-center px-8 pl-2 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">Quero Cadastrar um Pet </a>
            </div>
          </div>
          <div class="lg:absolute lg:inset-y-1 lg:right-10 lg:top-32 lg:pl-36 lg:w-1/1 lg:h-1/2 md:h-full md:flex md:justify-center xl:h-auto xl:w-1/2 xl:pb-60">
            <img class="h-57 w-full object-cover object-center sm:h-full md:h-1/2 md:w-1/2 lg:w-full lg:h-full xl:h-full xl:w-full" src="/hero/hero.svg" alt="">
          </div>

        </div>
      </main>
      </div>
    </div>

@endsection
