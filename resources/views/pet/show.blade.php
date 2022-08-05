@extends('layouts.default')
@section('title','AdoPet')
<link rel="icon" href="{!! asset('icons/pawprint.png') !!}"/>
@section('content')
    <div class="container px-5 py-24 mx-auto flex flex-col">
        <div class="lg:w-4/6 mx-auto">
            <div class="rounded-lg h-72 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="{{asset('storage/'.$pet->image)}}">
            </div>
            <div class="flex flex-col sm:flex-row mt-10">
                <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                    <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex flex-col items-center text-center justify-center">
                        <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{$pet->Owner->name}}</h2>
                        <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                        <p class="text-base">Para mais informações sobre o animal você pode entrar em contato através do número {{$pet->Owner->phone}}</p>
                    </div>
                </div>
                <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                    <p class="leading-relaxed text-lg mb-4">{{$pet->name}} é um animal de com uma personalidade {{$pet->personality}}.<br>A sua idade atual é {{$pet->age}} de idade.</p>
                    <div class="mr-2">
                        <a href="{{route('pet.adopt',['petId' => $pet->id, 'userId' => Auth::id()])}}" class="inline-flex items-center bg-indigo-400 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-600 rounded text-white mt-4 md:mt-0">Demonstrar Interesse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
