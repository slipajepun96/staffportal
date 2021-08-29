@extends('layout.system-layout')

@section('content')

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


<style>
    #hidden_div 
    {
        display: none;
    }

</style>

<script>
    $(function() {
      $('input[name="date_of_purchase"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10),
        locale: {
            format: 'YYYY-MM-DD'
        }
      });
      $('input[name="date_of_roadtax_expired"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: true,
        minYear: 2020,
        maxYear: 2050,
        locale: {
            format: 'YYYY-MM-DD'
        }
      });
    });

    function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == 2 ? 'inline-block' : 'none';
}

</script>


<div class="bg-gray-300 p-3">
    <a href="<?php echo url()->previous(); ?>" class="bg-yellow-500 hover:bg-yellow-300 text-black p-2 rounded inline-block">&larr; Kembali</a>&nbsp;&nbsp;<h1 class="text-2xl font-bold inline-block"> Tambah Kenderaan Baharu</h1>
</div>


<div class="m-3">
    <form action="{{route('cars-store')}}" method="POST">
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
            <input type="text" name="date_of_purchase" value="<?php date('Y-m-d'); ?>" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
            @error('date_of_purchase')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 mx-1 inline-block md:w-1/5 w-full ">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Tarikh Tamat Cukai Jalan 
            </label>       
            <input type="text" name="date_of_roadtax_expired" value="<?php date('Y-m-d'); ?>" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
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
            @error('fuel_type')
                <span class="text-sm text-red"> {{$message}}</span>
            @enderror
        </div>  
        
        
    </div>
    <div>
        <div class="mb-4 mx-1 inline-block md:w-1/6 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Kenderaan Rasmi
            </label>       
         <select name="type_of_usage" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " onchange="showDiv('hidden_div', this)">
             <option value="1">Kenderaan Pejabat</option>
             <option value="2">Kenderaan Rasmi</option>
             <option value="3">Kenderaan Bebas Guna</option>
         </select>
            @error('type_of_usage')
                <span class="text-sm text-red"> {{$message}}</span>  
            @enderror
        </div>
        <div id="hidden_div" class="mb-4 mx-1 inline-block md:w-1/4 w-full ">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Kenderaan Rasmi bagi ? 
                </label>       
             <select name="official_car_of" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
                <option value="0">Tiada</option>
                @foreach($users as $user) 
                    <option value="{{$user->name}}">{{$user->name}}</option>
                 @endforeach
             </select>
                @error('official_car_of')
                    <span class="text-sm text-red"> {{$message}}</span>  
                @enderror

        </div>

        <div class="mb-4 mx-1 inline-block md:w-1/4 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Pejabat / Ladang
            </label>       
         <select name="estate_id" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @foreach($estates as $estate)
                <option value="{{$estate->id}}">{{$estate->estate_name}}</option>  
            @endforeach
         </select>
            @error('estate_id')
                <span class="text-sm text-red"> {{$message}}</span>  
            @enderror
        </div>

        <div  class="mb-4 mx-1 inline-block md:w-1/4 w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Nama Pelulus Permohonan Penggunaan Kenderaan 
            </label>       
         <select name="car_approver_user_id" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
            <option value="0">Tiada</option>
            @foreach($users as $user) 
                <option value="{{$user->id}}">{{$user->name}}</option>
             @endforeach
         </select>
            @error('car_approver_user_id')
                <span class="text-sm text-red"> {{$message}}</span>  
            @enderror

        </div>
    </div>
    <input type="hidden" name="active" value=1>
        <button class="bg-green-700 hover:bg-green-600 text-white p-2 rounded" type="submit">Tambah Kenderaan &rarr;</button>
    

    </form>

</div>
@endsection