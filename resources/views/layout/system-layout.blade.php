<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Portal</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    </style>

</head>
<body class="bg-gray-100">

<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="w-full text-gray-200 bg-gray-800">
  <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-2 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-2">
    <div class="p-4 flex flex-row items-center justify-between">
      <a href="{{route('dashboard')}}" class="text-lg font-semibold tracking-widest rounded-lg text-white focus:outline-none focus:shadow-outline">Portal Kakitangan</a>
      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
        {{-- <a class="px-4 py-2 mt-2 text-sm rounded-lg bg-gray-700 hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Blog</a>
        <a class="px-4 py-2 mt-2 text-sm rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white md:mt-0 md:ml-4 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Portfolio</a>
        <a class="px-4 py-2 mt-2 text-sm rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white md:mt-0 md:ml-4 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
        <a class="px-4 py-2 mt-2 text-sm rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white md:mt-0 md:ml-4 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>
    --}}

        {{-- cuti --}}
        <div @click.away="open = false" class="relative" z-0" x-data="{ open: false }">
            <button @click="open = !open" class="z-auto flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg focus:text-white hover:text-white hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200">
            <span>Cuti</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
            <div class="z-50 px-2 py-2 bg-gray-800 rounded-md shadow ">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg hover:bg-gray-600 hover:text-white md:mt-0 hover:text-white hover:bg-gray-200" href="#">Senarai Cuti</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Permohonan Cuti Rehat</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Cuti Sakit / Kecemasan</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#"></a>
            </div>
            </div>

            
        </div>
        {{-- kenderaan --}}
        <div @click.away="open = false" class="relative z-0" x-data="{ open: false }">
            <button @click="open = !open" class=" z-0 flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg bg-transparent focus:text-white hover:text-white focus:bg-gray-600 hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
            <span>Kenderaan</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
            <div class="px-2 py-2 bg-white rounded-md shadow bg-gray-800 z-50">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('cars-index')}}">Senarai Kenderaan</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
            </div>
            </div>
        </div>

        {{-- tuntutan --}}
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg bg-transparent focus:text-white hover:text-white focus:bg-gray-600 hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
            <span>Tuntutan</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
            <div class="px-2 py-2 bg-white rounded-md shadow bg-gray-800">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
            </div>
            </div>
        </div>

        {{-- tetapan --}}
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg bg-transparent  hover:text-white  hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200">
            <span>Tetapan</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
            <div class="px-2 py-2 bg-white rounded-md shadow bg-gray-800">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('update-profile')}}">Kemaskini Profil</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
            </div>
            </div>
        </div>


        {{-- tetapan hr admin --}}
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg bg-transparent  hover:text-white  hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200">
            <span>Tetapan HR</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
            <div class="px-2 py-2 bg-white rounded-md shadow bg-gray-800">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('update-profile')}}">Kemaskini Profil</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 hover:text-white focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
            </div>
            </div>
        </div>
   
        <form action="{{route('logout')}}" method="POST">@csrf
            <button class="px-4 py-2 mt-2 text-sm rounded-lg bg-red-800 hover:bg-red-500 focus:bg-gray-600 focus:text-white hover:text-white md:mt-0 md:ml-4 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" type="submit">Logout &rarr;</button>
        </form>
    </nav>
  </div>
</div>











    @yield('content')
</div>
</div>
    
</body>
</html>

