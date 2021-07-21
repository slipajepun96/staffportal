@extends('layout.system-layout')

@section('content')
<div class="bg-gray-300 p-3">
    <a href="<?php echo url()->previous(); ?>" class="bg-yellow-500 hover:bg-yellow-300 text-black p-2 rounded inline-block">&larr; Kembali</a>&nbsp;&nbsp;<h1 class="text-2xl font-bold inline-block"> Tambah Kenderaan Baharu</h1>
</div>


<div class="m-3">
    <form action="">
        @csrf
    <div>
        <div class="mb-4 mx-1 inline-block md:w-1/5 w-full ">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Nombor Pendaftaran 
            </label>       
            <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="registration_no" type="text">
            @error('registration_no')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 mx-1 inline-block md:w-1/5 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Model Kenderaan 
            </label>       
            <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="model" type="text">
            @error('model')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 mx-1 inline-block md:w-1/5 w-full ">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Nombor Enjin 
            </label>       
            <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="engine_no" type="text">
            @error('engine_no')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 mx-1 inline-block md:w-1/3 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Nombor Casis 
            </label>       
            <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="chassis_no" type="text">
            @error('chassis_no')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>  
    </div>

    <div>
        <div class="mb-4 mx-1 inline-block md:w-1/5 w-full ">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Harga (RM)
            </label>       
            <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="price" type="text">
            
            @error('price')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 mx-1 inline-block md:w-1/5 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Tarikh Pembelian
            </label>       
            <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="date_of_purchase" type="date">
            @error('date_of_purchase')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 mx-1 inline-block md:w-1/5 w-full ">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Tarikh Tamat Cukai Jalan 
            </label>       
            <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="date_of_roadtax_expired" type="text">
            @error('date_of_roadtax_expired')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 mx-1 inline-block md:w-1/6 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Jenis Bahan Api
            </label>       
         <select name="fuel_type" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
             <option value="Diesel">Diesel</option>
             <option value="Petrol">Petrol</option>
         </select>
            @error('chassis_no')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>  

        <div class="mb-4 mx-1 inline-block md:w-1/6 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Masih Aktif ?
            </label>       
         <select name="active" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
             <option value="TRUE">Aktif</option>
             <option value="FALSE">Lupus / Tidak Aktif</option>
         </select>
            @error('chassis_no')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
    </div>

    </form>
</div>
@endsection