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
    // $(function() {
    //   $('input[name="planned_start_datetime"]').daterangepicker({
    //     singleDatePicker: true,
    //     timePicker:true,
    //     timePicker24Hour:true,
    //     timePickerIncrement:10,
    //     showDropdowns: true,
    //     autoUpdateInput: true,
    //     locale: 
    //     {
    //         format: 'YYYY-MM-DD hh:mm A'
    //     },
    //     minYear: 2021,
    //     maxYear: parseInt(moment().format('YYYY'))+2
    //   });
    //   $('input[name="planned_end_datetime"]').daterangepicker({
    //     singleDatePicker: true,
    //     timePicker:true,
    //     timePicker24Hour:true,
    //     timePickerIncrement:10,
    //     showDropdowns: true,
    //     autoUpdateInput: true,
    //     minYear: 2021,
    //     maxYear: parseInt(moment().format('YYYY'))+2,
    //     locale: 
    //     {
    //         format: 'YYYY-MM-DD hh:mm A'
    //     }
    //   });

    // });


    $(function() {
  $('input[name="planned_datetime"]').daterangepicker({
    timePicker: true,
    timePicker24Hour: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(1, 'hour'),
    locale: {
      format: 'DD-MM-YYYY HH:mm'
    }
}, function(start, end, label) {
    var datestart = start.format('YYYY-MM-DD HH:mm');
    document.getElementById("planned_start_datetime").value=datestart;
    var dateend = end.format('YYYY-MM-DD HH:mm ');
    document.getElementById("planned_end_datetime").value=dateend;

  });
});

    function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == 2 ? 'inline-block' : 'none';
}

</script>


<div class="bg-gray-300 p-3">
    <a href="<?php echo url()->previous(); ?>" class="bg-yellow-500 hover:bg-yellow-300 text-black p-2 rounded inline-block">&larr; Kembali</a>&nbsp;&nbsp;<h1 class="text-2xl font-bold inline-block"> Permohonan Penggunaan Kenderaan</h1>
</div>




<div class="m-3">
    <form action="{{route('cars-request-request-store')}}" method="POST">
        @csrf
        <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="user_id" type="text" value="{{Auth::user()->id}}" hidden>
        <div>
            <div class="mb-4 mx-1 inline-block md:w-1/3 w-full ">    
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Kenderaan
                </label>       
                <select name="car_id" class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
                    @foreach($cars as $car)
                        <option value="{{$car->id}}">{{$car->registration_no}} , {{$car->model}} , {{$car->estate->estate_name}}</option>
                    @endforeach
                </select>
                @error('car_id')
                    <span class="text-sm text-red"> {{$message}}</span>
                @enderror
            </div>
            <div class="mb-4 mx-1 inline-block md:w-1/3 w-full ">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Anggaran Tarikh & Masa Bermula & Berakhir
                </label>                 
                <input type="text" name="planned_datetime" id="planned_datetime"  class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">    
                @error('planned_start_datetime')
                    <span class="text-sm text-red-500"> {{$message}}</span>
                @enderror
                <input type="text" hidden name="planned_start_datetime" id="planned_start_datetime"  class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">    
                <input type="text" hidden name="planned_end_datetime" id="planned_end_datetime"  class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">    
            </div>
            <div class="mb-4 mx-1 inline-block md:w-1/4 w-full ">    
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Tujuan
                </label>       
                <input class="shadow appearance-none border w-1/4 w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " name="destination" type="text">
                @error('destination')
                    <span class="text-sm text-red-500"> {{$message}}</span>
                @enderror
            </div>
        </div>

    <div>
        
        <div class="mb-4 mx-1 inline-block  w-full ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Butiran Perjalanan
            </label>       
            <textarea name="journey_description" id="" rows="3" class="shadow appearance-none border w-full rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('journey_description')
                <span class="text-sm text-red-500"> {{$message}}</span>
            @enderror
        </div>
    </div>
   
        <button class="bg-green-700 hover:bg-green-600 text-white p-2 rounded" type="submit">Hantar Permohonan  &rarr;</button>
    

    </form>

</div>

@endsection
