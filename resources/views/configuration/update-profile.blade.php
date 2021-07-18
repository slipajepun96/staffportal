@extends('layout.system-layout')

@section('content')
<div class="bg-gray-300 p-3">
    <h1 class="text-2xl font-bold">Kemaskini Profil</h1>
</div>
<div class="p-5">

    <form action="{{route('user-profile-information.update')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Nama Kakitangan  
            </label>
  
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="name" type="text" value="{{$user->name}}" placeholder="Masukkan nama anda">
            @error('name')
            <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>    


        <div class="mb-4">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Emel
            </label>       
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" value="{{$user->email}}" placeholder="Masukkan alamat emel anda">
            @error('email')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>

        <div class="mb-4">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">
            Nombor Telefon
            </label>       
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="telephone" type="text" value="{{$user->telephone}}" placeholder="Masukkan nombor telefon anda">
            @error('telephone')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 text-sm">
            <button class="bg-green-700 hover:bg-green-600 text-white p-2 rounded" type="submit">Kemaskini &rarr;</button>
        </div>
      </form>
</div>
@endsection