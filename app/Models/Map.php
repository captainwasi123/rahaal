<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MapDetails;
use Auth;

class Map extends Model
{
    protected $table = 'tbl_map';

    public static function create(array $data){
        $b = new Map;
        $b->title = $data['title'];
        $b->country = $data['country'];
        $b->img_date = $data['img_date'];
        $b->lat = $data['lat'];
        $b->lng = $data['lng'];
        $b->save();

        return $b->id;
    }

     public static function episode_update($id, array $data){
        $b = Map::find($id);
        $b->title = $data['title'];
        $b->country = $data['country'];
        $b->img_date = $data['img_date'];
        $b->lat = $data['lat'];
        $b->lng = $data['lng'];
        $b->save();

        return $b->id;
    }

    public function details(){
        return $this->hasMany(MapDetails::class, 'map_id', 'id');
    }
}
