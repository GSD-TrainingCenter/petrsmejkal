@extends('layout.master')

@section('content')
<div class="maptool">
        @foreach($map->getFloors() as $floor)

        <div id="{{"floor".$loop->iteration}}" class="floor-img-layer">
            <img class="floor-img" src={{"mapimg/".$map->getFolder()."/".$floor['img']}} alt="floor">
        </div >


        <div id="{{"markers".$loop->iteration}}" class="floor-markers-layer">
            @foreach($floor['points'] as $point)
            <img id={{"marker-".$point['name']}} class="map-marker" style="top: {{$point['top']}}; left: {{$point['left']}} " src="icons/map_marker.png" alt="marker">
            @endforeach
        </div>
        @endforeach
        
        <div class="slider-floor-layer">
            <input id="input-floor"class="slider-floor" type="range" name="points" min="1" max={{ count($map->getFloors()) }}>
        </div>
    </div>

    @foreach($map->getFloors() as $floor)
        @foreach($floor['points'] as $point)
            <div id={{"dialog-marker-".$point['name']}} title={{$point['name']}}>
                <p>{{$point['description']}}</p>
            </div>
        @endforeach
        
    @endforeach
@endsection

@section('styles')
@parent
<link rel="stylesheet" href="css/maptool.css" />
@endsection

@section('scripts')
@parent
<script type="text/javascript" src="js/maptool.js"></script>
@endsection