<!--==================================== Home map section start================================-->
@php
    $investment =App\Models\Weoffer::orderBy("id","ASC")->where("publish","draft")->first();
@endphp
@if($investment)

{!! $investment->description !!}
@endif
<!--==================================== Home map section end================================-->
