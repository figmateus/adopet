@extends('layouts.default')
@section('title','AdoPet | Cadastro')
<link rel="icon" href="{!! asset('icons/pawprint.png') !!}"/>
@section('content')
<div class="md:container md:mx-auto flex flex-col items-center justify-center">
    <div class="container flex justify-center mx-auto" >
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
        <form class="w-full md:h-1/4 max-w-lg md:pt-2" method="POST">
          @csrf
            <h1 class=" text-4xl pb-4">Cadastre-se</h1>
            <p class=" text-2x1 pb-4 text-gray-500">Precisamos de mais algumas informações antes de te mostrar os pets disponiveis para adoção.</p>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                  Nome 
                </label>
                <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 mb-0 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6"> 
                <div class="w-full md:w-1/2 px-3 md:pt-0">  
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                      Email
                    </label>
                    <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 md:py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                      Password
                    </label>
                    <input name="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border md:py-2 border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" type="password">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6"> 
                <div class="w-full md:w-1/3 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cpf">
                      CPF
                    </label>
                    <input name="cpf" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cpf" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                      Telefone
                    </label>
                    <input name="phone" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cep">
                      Cep 
                    </label>
                    <input name="cep" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cep" type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="street">
                    Endereço 
                  </label>
                  <input name="street" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="street" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="neighbor">
                    Bairro
                  </label>
                  <input name="neighbor" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="neighbor" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number">
                    Numero
                  </label>
                  <input name="number" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded md:py-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="number" type="text">
                </div>
              </div>
            <div class="flex flex-wrap -mx-3 mb-2 md:py-2">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                  cidade
                </label>
                <input name="city" class="appearance-none block w-full bg-gray-200 md:py-2 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="city" type="text">
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="state">
                  Estado
                </label>
                <div class="relative">
                  <select name="state" class="block appearance-none w-full md:py-2 bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="state"> 
                  @foreach ($states as $key => $state)    
                  <option value="{{$state}}" >{{$key}}</option>
                  @endforeach  
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="complement">
                  Complemento
                </label>
                <input name="complement" class="appearance-none block w-full bg-gray-200 md:py-2 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="complement" type="text">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 pl-3 pt-3">
                <button class="bg-blue-500 hover:bg-blue-700 md:py-2 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                  Registrar
                </button>
              </div>
          </form>
    </div>
  </div>
  <script src="../js/register.js"></script>
@endsection