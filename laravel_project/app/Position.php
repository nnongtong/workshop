<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = "position";

    public static function getAll(){
        return self::get();
        }

    public static function getItem($id){
        //SIMILAR TO, BUT DIFFERENT A LITTLE BIT
        //return self::where('id',$id)->get($id);
        return self::findOrFail($id);
        }
    public static function search($q){
        return self::where("id","like","%{$q}%")           
        ->orWhere("name","like","%{$q}%")         
        ->get();
}
}