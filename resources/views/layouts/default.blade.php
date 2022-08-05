<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="AdoPet" />
    <title>@yield('title') | AdoPet</title>
</head>
@php
$user =  Auth::user() ? Auth::user() : Auth::guard('owners')->user();
@endphp
<body class="flex flex-col min-h-screen">
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a @if ($user) href="{{route('pet.index')}}" @else href="{{route('hero')}}"  @endif class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg version="1.1" width="10%" height="10%" viewBox="0 0 14 14" id="svg2"> <defs id="defs6" /><rect width="14" height="14" x="0" y="0" id="canvas" style="fill:none;stroke:none;visibility:hidden" />
                <path d="M 9.412959,0.00215164 C 8.1693111,0.14587964 7.4631991,1.5093558 7.3733471,2.6936522 7.2264421,3.7464942 7.6860601,5.0899481 8.7918901,5.3320382 9.750208,5.4175142 10.512633,4.5171926 10.825819,3.6583651 11.195679,2.5833906 11.206482,1.147845 10.309038,0.34250684 10.059753,0.12647084 9.739671,-0.00476426 9.412959,0.00215164 z m -5.0729339,0.056367 c -1.034807,0.074858 -1.5652,1.27744256 -1.493223,2.24276386 0.0088,1.2907239 0.717612,2.7424122 2.010186,3.0488129 0.963956,0.1042448 1.606661,-0.9181087 1.66656,-1.812036 0.123011,-1.3680543 -0.483132,-3.02530546 -1.855765,-3.43834986 -0.106687,-0.029465 -0.217332,-0.044089 -0.327758,-0.041191 z M 12.655043,4.2036246 c -1.388365,0.1017608 -2.266355,1.5813816 -2.326691,2.9184062 -0.07305,0.8707439 0.489487,1.9657608 1.436683,1.9057498 C 13.181597,8.8776256 14.035636,7.298817 14.00043,5.9270567 13.99133,5.1373276 13.490879,4.2365389 12.655043,4.2036246 z M 0.01075614,6.0085263 c -0.12855096,1.481506 0.908149,3.1560203 2.41413596,3.2493013 0.912778,-0.06096 1.343188,-1.121093 1.238576,-1.9598358 C 3.5801081,6.0604403 2.7526501,4.7931558 1.6775691,4.6275979 0.60248914,4.4620399 -0.00628982,5.221568 0.01075614,6.0085263 z M 7.1593651,7.2723472 c -1.411887,0.00329 -2.70277,0.9264694 -3.392913,2.1755314 -0.578235,0.9334254 -1.050947,1.9901564 -1.140853,3.1053424 0.01967,0.860048 0.840276,1.575842 1.663122,1.404534 1.173683,-0.152345 2.222485,-0.967418 3.44297,-0.8147 1.014283,0.08097 1.8507729,0.867482 2.8748439,0.856051 0.994345,0.03734 1.56796,-1.102139 1.188753,-1.994632 C 11.387234,10.726579 10.596107,9.6151936 9.746977,8.6142466 9.069618,7.87643 8.1824521,7.2396817 7.1593651,7.2723472 z"
                id="pet" style="fill:#000000;fill-opacity:1;stroke:none" />
            </svg>
            <span class="ml-3 text-xl">AdoPet</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            @if (!$user)
            <a href="{{route('login')}}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login</a>
              @elseif(!Auth::guard('owners')->check())
                  <div class="mr-2">
                      <a href="{{route('user.edit',$user->id)}}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Meus Dados</a>
                  </div>
                  <div>
                      <a href="{{route('logoff')}}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Logoff</a>
                  </div>
              @else
                <div class="mr-2">
                    <a href="{{route('owner.PetRegister')}}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Cadastrar Pet</a>
                </div>

                <div class="mr-2">
                    <a href="{{route('owner.index')}}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Pets Cadastrados</a>
                </div>
                  <div class="mr-2">
                      <a href="{{route('owner.interested')}}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Pessoas Interessadas</a>
                  </div>
                  <div class="mr-2">
                      <a href="#" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Meus Dados</a>
                  </div>
                <div>
                  <a href="{{route('logoff')}}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Logoff</a>
                </div>
              @endif

          </nav>
        </div>
      </header>
    <main class="grow">
        @yield('content')
    </main>
    <footer class="text-gray-600 body-font bg-gray-100">
    <div class="container px-5 py-4 mx-auto flex justify-center items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <span class="ml-3 text-xl">AdoPet</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022
           - AdoPet
        </p>
    </div>
</footer>
</body>
</html>
