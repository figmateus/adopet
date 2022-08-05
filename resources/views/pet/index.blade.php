@extends('layouts.default')
@section('title','AdoPet')
<link rel="icon" href="{!! asset('icons/pawprint.png') !!}"/>
@section('content')
    <div class="flex justify-center">
    @if (\Session::has('success'))
        <div class="pt-12" role="alert">
                    <span class="p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
                        {!! \Session::get('success') !!}
                    </span>
        </div>
    @endif
    @if (\Session::has('error'))
        <div class="" role="alert">
            <span class="p-2 mb-2 text-sm text-red-500 bg-red-300 rounded-lg dark:bg-red-200 dark:text-red-800">Erro</span>{!! \Session::get('error') !!}
        </div>
    @endif
        </div>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Pets Disponiveis para adoção</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Esses são os pets disponiveis para adoção, são pets cadastrados por ONGs, e por pessoas nos grupos do facebook da sua região.</p>
    </div>
    <div class="flex flex-wrap -m-4">
        @foreach($pets as $pet)
        <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
            @if($pet->image)
          <img class="h-30 rounded w-full object-cover object-center mb-6" src="{{asset('storage/'.$pet->image)}}" alt="content">
            @else
            <img class="h-30 rounded w-full object-cover object-center mb-6" src="{{asset('avatar.png')}}" alt="content">
            @endif
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{$pet->name}}</h2>
          <p class="leading-relaxed text-base">Idade: {{$pet->age}}</p>
          <p class="leading-relaxed text-base">Sexo: {{$pet->gender}}</p>
          <p class="leading-relaxed text-base">Personalidade: {{$pet->personality}}</p>
          <p class="leading-relaxed text-base">Status: {{$pet->status}}</p>
            <a href="{{route('pet.show',['id' => $pet->id])}}" class="inline-flex items-center bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded text-white mt-4 md:mt-0">Ver Mais</a>
        </div>
      </div>
        @endforeach
    </div>
      {{ $pets->links() }}
      <div>
      </div>
  </div>
  <script src="../js/register.js"></script>
@endsection
