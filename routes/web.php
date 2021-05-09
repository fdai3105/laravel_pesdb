<?php

use App\Models\Player;
use App\Models\PlayerStat;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\LazyCollection;
use pcrov\JsonReader\JsonReader;

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
    return view('welcome');
});


/** import json to databases **/
Route::get('/demo', function () {
    ini_set('max_execution_time', 0);

    $lazy = LazyCollection::make(function () {
        $file = file_get_contents(storage_path() . "/json/player.json");
        $json = json_decode($file, true);

        foreach ($json as $i) {
            yield $i;
        }
    });

    $lazy->each(function ($item) {
        $player = new Player();
        $player->fill($item);
        $player->save();
        foreach ($item['player_stats'] as $stat) {
            $playerStats = new PlayerStat();
            $playerStats->fill($stat);
            $playerStats->player_id = $player->id;
            $playerStats->save();
        }
    });

    echo 'finish';
});
