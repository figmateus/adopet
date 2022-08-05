@extends('layouts.default')
@section('title','AdoPet')
<link rel="icon" href="{!! asset('icons/pawprint.png') !!}"/>
@section('content')
    <div class="md:container md:mx-auto flex flex-col items-center  justify-center">
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
        <div class="container flex justify-center mx-auto">
            <table class="w-1/4 flex flex-col items-center md:h-1/4 md:pt-2 lg:pt-32">
                <thead class="border-b bg-indigo-600">
                <tr>
                    <th scope="col" class="text-sm font-medium text-white pl-20 py-4">
                        Foto
                    </th>
                    <th scope="col" class="text-sm font-medium text-white pl-52 py-4">
                        Pet
                    </th>
                    <th scope="col" class="text-sm font-medium text-white pl-52 py-4">
                        Usuario
                    </th>
                    <th scope="col" class="text-sm font-medium text-white pl-52 py-4">
                        Telefone
                    </th>
                    <th scope="col" class="text-sm font-medium text-white pl-52 py-4">
                        Email
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-52 py-4">
                        Ações
                    </th>
                </tr>
                </thead class="border-b">
                <tbody>
                @foreach($interested as $interest)

                    <tr class="bg-white border-b">
                        @if($interest->pet[0]->image)
                            <td class="pl-20"><img src=" {{ asset('storage/'.$interest->pet[0]->name) }}" width="50px" height="50px" class="rounded-full"/></td>
                        @else
                            <td class="pl-20"><img src="{{asset('storage/avatar.png')}}" width="50px" alt="" height="50px" class="rounded-full"/></td>
                        @endif
                        <td class="text-sm text-gray-900 font-light pl-32 py-2 whitespace-nowrap">
                           {{$interest->pet[0]->name}}
                        </td>
                        <td class="text-sm text-gray-900 font-light pl-44 py-2 whitespace-nowrap">
                            {{$interest->user->name}}
                        </td>
                        <td class="text-sm text-gray-900 font-light pl-28 py-2 whitespace-nowrap">
                            {{$interest->user->phone}}
                        </td>
                        <td class="text-sm text-gray-900 font-light pl-48 py-2 whitespace-nowrap">
                            {{$interest->user->email}}
                        </td>
                        <td class="text-sm flex text-gray-900 font-light pl-64 py-2">
                            <div class="mr-2">
                                <form action="{{route('owner.Deleteinterested', ['id' => $interest->id])}}" method="post">
                                    @csrf
                                    {{method_field('delete')}}
                                    <button type="submit" class="inline-flex items-center border-0 py-1 px-3 focus:outline-none bg-red-300 hover:bg-red-400 rounded text-base mt-4 md:mt-0">Deletar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
