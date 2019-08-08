<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";

    public static function getAll(){
        return self::get();
        }

    public static function getItem($id){
        //SIMILAR TO, BUT DIFFERENT A LITTLE BIT
        //return self::where('id',$id)->get($id);
        return self::findOrFail($id);
        }
    public static function search($q){
        return self::where("name","like","%{$q}%")           
        ->orWhere("age","like","%{$q}%")         
        ->orWhere("address","like","%{$q}%")         
        ->orWhere("salary","like","%{$q}%")
        ->get();
}
        
        
}
