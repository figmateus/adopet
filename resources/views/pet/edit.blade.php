@extends('layouts.default')
@section('title','AdoPet | Edite o pet')
<link rel="icon" href="{!! asset('icons/pawprint.png') !!}"/>
@section('content')
    <div class="md:container md:mx-auto flex flex-col items-center  justify-center">
        @if (\Session::has('error'))
            <div class="" role="alert">
                <span class="p-2 mb-2 text-sm text-red-500 bg-red-300 rounded-lg dark:bg-red-200 dark:text-red-800">Erro</span>{!! \Session::get('error') !!}
            </div>
        @endif
        <div class="container flex justify-center mx-auto" >
            <form class="w-full flex flex-col items-center md:h-1/4 max-w-lg md:pt-2 lg:pt-36" method="POST" enctype="multipart/form-data">
                @csrf
                <h3 class="text-3xl pb-4">Informações do animal</h3>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full pb-5">
                        <span class="text-1xl pl-3 txt-xs uppercase tracking-wide font-bold text-gray-700">Envie a foto do animal</span>
                        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-54 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer white:hover:bg-bray-800 white:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 white:hover:border-r-indigo-300 white:hover:bg-gray-600">
                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Enviei a foto</span> ou arraste e solte</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" value="{{$pet->image}}" name="image" type="file" class="hidden" />
                            @error('image')
                            <span class="text-red-300">{{ $errors->first('image') }}</span>
                            @enderror
                        </label>
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            Nome do Pet
                        </label>
                        <input name="name" value="{{$pet->name}}" class="appearance-none @error('name') border-red-400 @enderror block w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="street" type="text">
                        @if ($errors->has('name'))
                            <span class="text-red-300">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="w-full md:w-1/4 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="age">
                            Idade
                        </label>
                        <input name="age" value="{{$pet->age}}" class="appearance-none block @error('age') border-red-400 @enderror w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="neighbor" type="text">
                        @if ($errors->has('age'))
                            <span class="text-red-300">{{ $errors->first('age') }}</span>
                        @endif
                    </div>
                    <div class="w-full md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="personality">
                            Personalidade
                        </label>
                        <input name="personality" value="{{$pet->personality}}" class="appearance-none block @error('personality') border-red-400 @enderror w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="number" type="text">
                        @if ($errors->has('personality'))
                            <span class="text-red-300">{{ $errors->first('personality') }}</span>
                        @endif
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender">
                            Sexo
                        </label>
                        <div class="relative">
                            <select name="gender" class="block appearance-none w-full md:py-2 bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="state">
                                <option value="masculino" @if($pet->gender == 'masculino') selected @endif >Masculino</option>
                                <option value="feminino" @if($pet->gender == 'feminino') selected @endif >Feminino</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 pl-3 pt-3">
                    <button class="bg-blue-500 hover:bg-blue-700 md:py-2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Editar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
