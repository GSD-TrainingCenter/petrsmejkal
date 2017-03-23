<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    //$path = urlencode($path);
    
    return view('welcome');
    
});

Route::get('/map', function () {
    $path = storage_path()."\app\maps\defaultmap\conf.json";
    $content = json_decode(file_get_contents($path), true);
    $map = new App\Mapv1($content);
    //$floors = $map['building']['floors'];
    
    return view('map')->with('map',$map);
    
});

Route::get('/mapimg/{mapName}/{imageName}', function ($mapName,$imageName) {
    $path = storage_path()."\\app\\maps\\".$mapName."\\img\\".$imageName;
    return response(File::get($path))
            ->withHeaders([
                'Content-Type' => 'image/'.File::extension($imageName),
            ]);
    
});

