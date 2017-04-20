@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-md-10 col-sm-10 col-xs-10">
        <div class="input-group">
            <input type="text" class="form-control" id="inTextSearch" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" id="btnSearch" type="button">Search</button>
            </span>
        </div>
        <div class="map">

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
                <input id="input-floor" class="slider-floor" type="range" value="1" name="points" min="1" max={{ count($map->getFloors()) }}>
            </div>

        </div>      
    </div>
</div>

@foreach($map->getFloors() as $floor)
@foreach($floor['points'] as $point)
<div id={{"dialog-marker-".$point['name']}} style="display:none;" title={{$point['name']}}>
    <p>{{$point['description']}}</p>
</div>
@endforeach

@endforeach

@endsection

@section('styles')
@parent
<link rel="stylesheet" href="css/maptool.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('scripts')
@parent
<script type="text/javascript" >var searchPoints = {!! $searchPoints !!};</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/maptool.js"></script>
@endsection