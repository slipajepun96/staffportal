@extends('layout.system-layout')

@section('content')
<div class="bg-gray-300 p-3">
    <h1 class="text-2xl font-bold">Senarai Permohonan Penggunaan Kenderaan</h1>
</div>

<script>
    function deactivateConfirmation()
    {
        confirm("Anda pasti untuk membuang permohonan ini? \n Ini tidak boleh diundur")
    }
    function cancelConfirmation()
    {
        confirm("Anda pasti untuk membatalkan perjalanan ini? \n Ini tidak boleh diundur")
    }
</script>
<div class="m-3 font-lg">
    Senarai Permohonan Anda
</div>
<div class="m-3">
    <a href="{{route('cars-request-request-use')}}" class="bg-green-700 hover:bg-green-500 text-white p-2 rounded">&#43; Permohonan Penggunaan Kenderaan Baharu</a>
</div>

@if (session('status'))
    <div class="bg-red-300 text-red-900 p-2 rounded shadow m-3">
        {{ session('status') }}
    </div>
@endif

<style>
        @media only screen and (max-width: 900px) {
        .display-none{
            display: none;
        }
    }
</style>

<div class="m-3">

    <table class="border-collapse border border-green-900 w-full">
        <thead>
            <tr class="bg-green-700 text-white p-3 rounded">
                <th width="5%" class="border border-blue-900 p-3 display-none">ID</th>
                <th width="10%" class="border border-blue-900">No. Pendaftaran Kenderaan</th>
                <th width="25%" class="border border-blue-900">Tarikh & Masa Mula Guna</th>
                <th width="20%" class="border border-blue-900 display-none">Destinasi</th>
                <th width="15%" class="border border-blue-900">Status Permohonan</th>
                <th width="25%" class="border border-blue-900">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @if($car_requests->count()==0)
                <tr><td colspan=6>Tiada maklumat untuk dipaparkan <br>
                Nothing to display</td></tr>
            @endif

            @foreach($car_requests as $car_request)
            <?php $planned_start_date=strtotime($car_request->planned_start_datetime);
                $planned_start_date=date("d-M-Y H:i",$planned_start_date);
            ?>
                <tr class="h-30 border border-black hover:bg-gray-200 text-center min-h-full">
                <td class="border border-gray-300 p-3 px-5 display-none">{{$car_request->id}}</td>
                <td class="border border-gray-300 p-3 px-5">{{$car_request->car->registration_no}}</td>
                <td class="border border-gray-300 p-3 px-5">{{$planned_start_date}}</td>
                <td class="border border-gray-300 p-3 px-5 display-none">{{$car_request->destination}}</td>
                <td class="border border-gray-300 p-3 px-5">
                                                            @if($car_request->status=='1') 
                                                               <div class="text-black-700 text-sm bg-yellow-400 rounded-full p-2 shadow">Belum Diluluskan</div>
                                                            @elseif($car_request->status=='2')
                                                            <div class="text-white bg-green-400 text-sm rounded-full p-2 dshadow">Diluluskan</div>
                                                            @elseif($car_request->status=='3')
                                                            <div class="text-white bg-red-400 text-sm rounded-full p-2 shadow">Ditolak</div>
                                                            @else   
                                                            <div class="text-white bg-black text-sm rounded-full p-2 shadow">Tiada Status</div>
                                                            @endif
                </td>


                <td class="border border-gray-300 p-3 px-5">
                        <a href="{{route('car-request-view',$car_request->id)}}" title="Lihat Butiran">
                        <button class=" modal-open bg-green-500 hover:bg-green-300 text-gray-800 font-bold py-2 px-4 rounded" type="button"> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </button>
                        </a>
                        <?php $current_time=date("Y-m-d H:i:s");?>
                        @if($car_request->status==1)
                        {{-- @if($current_time<$car_request->planned_start_datetime) --}}
                        <a href="" title="Edit Butiran Permohonan">
                            <button class="bg-yellow-500 hover:bg-yellow-300 text-gray-800 font-bold py-2 px-4 rounded"> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                        </a>
                        <form action="/cars/request/delete/{{$car_request->id}}" method="POST" onsubmit="return confirm('Adakah anda masih ingin membuang permohonan ini ? \n Ini tidak boleh diundur')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-300 text-gray-800 font-bold py-2 px-4 rounded" id="deleteform"> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                        @endif
                        @if($car_request->status==2)
                        <a href="{{route('car-request-delete',$car_request->id)}}" title="Batal Perjalanan Yang Telah Diluluskan">
                            <button class="bg-red-500 hover:bg-red-300 text-gray-800 font-bold py-2 px-4 rounded" onclick="cancelConfirmation()"> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </a>
                        @endif
                </td>                
            </tr>
            @endforeach 
            
        </tbody>
    </table>

  
</div>


@endsection