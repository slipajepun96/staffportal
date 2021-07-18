@extends('layout.layout')

@section('content')


<div class="text-grey-700">
    Pendaftaran Akaun

    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="mb-4">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Nama Kakitangan  
            </label>       
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="name" type="text" placeholder="Nama Pengguna">
            @error('name')
            <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>    

        <div class="mb-4">    

            <label class="text-gray-700 text-sm font-bold mb-2" for="designation">
                Jawatan  
            </label>
            <select name="designation" class="rounded border shadow w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @foreach ($designations as $designation)
                <option value="{{ $designation->designation}}">{{ $designation->designation}}</option>  
            @endforeach
            </select>  
            @error('designation')
            <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4">    
            <label class="text-gray-700 text-sm font-bold mb-2" for="username">
                Nama Pejabat  
                </label>
                <select name="estate_id" class="rounded border shadow w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ($estates as $estate)
                        <option value="{{ $estate->id}}">{{ $estate->estate_name}}</option> 
                    @endforeach
                </select>  
                @error('estate_id')
                    <span class="text-sm text-red"> {{$message}}</span>
                @enderror 
            </div>
        </div>
        {{-- <input type="hidden" name="estate_id" value="Ibu Pejabat PASB">
        <input type="hidden" name="designation" value="Kerani IT"> --}}
        <div class="mb-4">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Nombor Kad Pengenalan
            </label>       
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nric" type="text" placeholder="Masukkan tanpa -">
        </div>

        <div class="mb-4">    
            <label class="text-gray-700 text-sm font-bold mb-2" for="birthdate">
                Tarikh Lahir 
                </label>
                <div id="app"><vuejs-datepicker :value="state.date"  class="text-sm" name="birthdate" ></vuejs-datepicker></div>
                @error('birthdate')
                    <span class="text-sm text-red"> {{$message}}</span>
                @enderror
        </div>

        <div class="mb-4">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Emel
            </label>       
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text" placeholder="Masukkan alamat emel anda">
            @error('email')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>

        <div class="mb-4">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">
            Nombor Telefon
            </label>       
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="telephone" type="text" placeholder="Masukkan nombor telefon anda">
            @error('telephone')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>

       

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Kata Laluan
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="Kata Laluan">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Kata Laluan (Semula)
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password" placeholder="Kata Laluan">
        </div>

        <div class="mb-4 text-sm">
            <button class="bg-green-700 hover:bg-green-600 text-white p-2 rounded" type="submit">Daftar &rarr;</button>
        </div>
      </form>
</div>

<div id="app">
    <vuejs-datepicker></vuejs-datepicker>
  </div>
  <script src="https://unpkg.com/vue"></script>
  <script src="https://unpkg.com/vuejs-datepicker"></script>
  <script>
  const app = new Vue({
    el: '#app',
    components: {
        vuejsDatepicker
    }
  })

  var state = {
  date: new Date(2016, 9,  16)
}
  </script> 

@endsection






