@extends('layout.system-layout')

@section('content')
<div class="bg-gray-300 p-3">
    <a href="<?php echo url()->previous(); ?>" class="bg-yellow-500 hover:bg-yellow-300 text-black p-2 rounded inline-block">&larr; Kembali</a>&nbsp;&nbsp;<h1 class="text-2xl font-bold inline-block"> Butiran Permohonan Penggunaan Kenderaan</h1>
</div>

<div class="m-3 bg-gray-200 rounded p-3">
    <div class="grid grid-cols-1 md:grid-cols-3  m-3">
        <div class="py-3 rounded">
            <div class="bg-gray-100 p-4 m-1 rounded font-bold align-middle">Nama Pemohon</div>
            <div class="bg-gray-100 p-4 m-1 rounded align-middle">{{$result->user->name}}</div>
        </div>
        <div class="py-3 rounded">
            <div class="bg-gray-100 p-4 m-1 rounded font-bold align-middle">Ladang / Pejabat Pemohon</div>
            <div class="bg-gray-100 p-4 m-1 rounded align-middle">{{$result->estate->estate_name}}</div>
        </div>
        <div class="py-3 rounded border-solid">
            <div class="bg-gray-100 p-4 m-1 rounded font-bold align-middle">Status</div>
            @if($result->status==1)
            <div class="bg-gray-100 p-4 m-1 rounded bg-yellow-400 align-middle">Belum Diluluskan</div>
            @elseif($result->status==2)
            <div class="bg-gray-100 p-4 m-1 rounded bg-green-400 align-middle">Diluluskan</div>
            @elseif($result->status==3)
            <div class="bg-gray-100 p-4 m-1 rounded bg-red-400 align-middle">Ditolak</div>
            @else
            <div class="bg-gray-100 p-4 m-1 rounded bg-black text-white align-middle">Error</div>
            @endif
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 m-3">
        <div class="bg-gray-100 p-4 m-1 rounded font-bold font-sans">Kenderaan Dipohon</div>
        <div class="bg-gray-100 p-4 m-1 rounded ">{{$result->car->registration_no}} , {{$result->car->model}}</div>
    </div>

    <?php 
    $planned_start_date=strtotime($result->planned_start_datetime);
    $planned_start_date=date("d-M-Y H:i",$planned_start_date);
    $planned_end_date=strtotime($result->planned_end_datetime);
    $planned_end_date=date("d-M-Y H:i",$planned_end_date);
?>

    <div class="grid grid-cols-1 md:grid-cols-3 m-3">
        <div class="py-3 rounded">    
            <div class="bg-gray-100 p-4 m-1 rounded font-bold">Tarikh & Masa Mula Guna</div>
            <div class="bg-gray-100 p-4 m-1 rounded ">{{$planned_start_date}}</div>
        </div>
        <div class="py-3 rounded">    
            <div class="bg-gray-100 p-4 m-1 rounded font-bold">Tarikh & Masa Tamat Guna</div>
            <div class="bg-gray-100 p-4 m-1 rounded ">{{$planned_end_date}}</div>
        </div>
        <div class="py-3 rounded">    
            <div class="bg-gray-100 p-4 m-1 rounded font-bold">Tujuan</div>
            <div class="bg-gray-100 p-4 m-1 rounded ">{{$result->destination}}</div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 m-3">
        <div class="py-3 rounded">      
            <div class="bg-gray-100 p-4 m-1 rounded font-bold">Butiran Perjalanan</div>
            <div class="bg-gray-100 p-4 m-1 rounded ">{{$result->journey_description}}</div>
        </div>
    </div>
    

</div>


@endsection


