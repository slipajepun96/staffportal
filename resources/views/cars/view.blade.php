@extends('layout.system-layout')

@section('content')
<div class="bg-gray-300 p-3">
    <a href="<?php echo url()->previous(); ?>" class="bg-yellow-500 hover:bg-yellow-300 text-black p-2 rounded inline-block">&larr; Kembali</a>&nbsp;&nbsp;<h1 class="text-2xl font-bold inline-block"> Butiran Kenderaan</h1>
</div>

<div class="m-3 bg-gray-200 rounded p-3">
    <div class="grid grid-cols-1 md:grid-cols-6 gap-4 m-3">
        <div class="bg-gray-100 p-4 rounded font-bold">Nombor Pendaftaran</div>
        <div class="bg-gray-100 p-4 rounded ">{{$car->registration_no}}</div>
        <div class="bg-gray-100 p-4 rounded font-bold">Model Kenderaan</div>
        <div class="bg-gray-100 p-4 rounded ">{{$car->model}}</div>
        <div class="bg-gray-100 p-4 rounded font-bold">Harga Kenderaan</div>
        <div class="bg-gray-100 p-4 rounded ">RM {{$car->price}}</div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-3">
        <div class="bg-gray-100 p-4 rounded font-bold">Pejabat / Ladang</div>
        <div class="bg-gray-100 p-4 rounded ">{{$car->estate->estate_name}}</div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 m-3">
        <div class="bg-gray-100 p-4 rounded font-bold">Nombor Enjin</div>
        <div class="bg-gray-100 p-4 rounded ">{{$car->engine_no}}</div>
        <div class="bg-gray-100 p-4 rounded font-bold">Nombor Casis</div>
        <div class="bg-gray-100 p-4 rounded ">{{$car->chassis_no}}</div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 m-3">
        <div class="bg-gray-100 p-4 rounded font-bold">Tarikh Pembelian</div>
        <div class="bg-gray-100 p-4 rounded ">{{$car->date_of_purchase}}</div>
        <div class="bg-gray-100 p-4 rounded font-bold">Tarikh Pembaharuan Cukai Jalan</div>
        <div class="bg-gray-100 p-4 rounded ">{{$car->date_of_roadtax_expired}}</div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 m-3">
        <div class="bg-gray-100 p-4 rounded font-bold">Kenderaan Rasmi</div>
        <div class="bg-gray-100 p-4 rounded ">@if($car->official_car==FALSE|| $car->official_car=='')
            Bukan Kenderaan Rasmi
        @elseif($car->official_car==TRUE)
            {{$car->official_car_of}}
        @endif</div>
        <div class="bg-gray-100 p-4 rounded font-bold">Jenis Bahan Api</div>
        <div class="bg-gray-100 p-4 rounded ">{{$car->fuel_type}}</div>
    </div>
    

</div>


@endsection


