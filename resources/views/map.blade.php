@extends('layout.master')

@section('content')
<div class="map">
   @foreach($map->getFloors() as $floor)
    <img src={{"mapimg/".$map->getFolder()."/".$floor['img']}} alt="floor">
   @endforeach
</div>

@endsection

