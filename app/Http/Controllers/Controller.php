<?php

namespace App\Http\Controllers;

use App\Models\Nation;
use App\Models\Player;
use App\Models\PlayerStat;
use App\Models\Team;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\LazyCollection;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** import json to databases **/
    /**
     *  php artisan tinker
     *  app()->call('App\Http\Controllers\Controller@loadDataFromJson');
     */
    function loadDataFromJson() {
        ini_set('max_execution_time', 0);
        $lazy = LazyCollection::make(function () {
            $file = file_get_contents(storage_path() . "/json/players_default.json");
            $json = json_decode($file, true);
            foreach ($json as $i) {
                yield $i;
            }
        });
        $lazy->each(function ($item) {
            try {
                $nation_id = null;
                $team_id = null;
                if (!empty($item['nation'])) {
                    $nation = Nation::where('name', '=', $item["nation"]["name"]);
                    if ($nation->exists()) {
                        $nation_id = $nation->first()->id;
                    } else {
                        $newNation = new Nation();
                        $newNation->fill($item['nation']);
                        $newNation->save();
                        $nation_id = $newNation->id;
                    }
                }
                if (!empty($item['team'])) {
                    $team = Team::where('name', '=', $item['team']['name']);
                    if ($team->exists()) {
                        $team_id = $team->first()->id;
                    } else {
                        $newTeam = new Team();
                        $newTeam->fill($item['team']);
                        $newTeam->save();
                        $team_id = $newTeam->id;
                    }
                }
                $player = Player::create([
                    'name' => $item['name'],
                    'full_name' => array_key_exists('full_name', $item) ? $item['full_name'] : null,
                    'age' => $item['age'],
                    'desc' => $item['desc'],
                    'ovr' => $item['ovr'],
                    'pos' => $item['pos'],
                    'position' => $item['position'],
                    'max_level' => $item['player_max_level'],
                    'img_avatar' => $item['img_avatar'],
                    'img_card' => $item['img_card'],
                    'url' => $item['url'],
                    'market_value' => array_key_exists('market_value', $item) ? $item['market_value'] : null,
                    'stronger_foot' => $item['stronger_foot'],
                    'height' => $item['height'],
                    'weight' => $item['weight'],
                    'face' => $item['face'],
                    'my_club' => $item['my_club'],
                    'type' => 'Default',
                    'nation_id' => $nation_id,
                    'team_id' => $team_id,
                ]);
                foreach ($item['player_stats'] as $stat) {
                    $playerStats = new PlayerStat();
                    $playerStats->fill($stat);
                    $playerStats->player_id = $player->id;
                    $playerStats->save();
                }
                echo $player->id;
            } catch (Exception $e) {
                echo $item['name'];
                echo $e->getMessage();
            }
        });
        echo 'finish';
    }
}
