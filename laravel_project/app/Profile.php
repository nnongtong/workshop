<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Profile extends Model
{
    protected $table = "profiles";
    public static function getAll(){
        $sql = "SELECT * FROM profiles";
        return DB::select($sql, []);
    }
    public static function getItem($id){
        $sql = "SELECT * FROM profiles 
        WHERE id = {$id}";
        return DB::select($sql, []);
    }
    public static function search($q){
        $sql = "SELECT * from profiles where name like '%{$q}%' ";
        return DB::select($sql, []);
    }
    public static function insertItem($item){
        $name = $item["name"];
        $lastname = $item["lastname"];
        $sql = "INSERT INTO profiles(name,lastname) 
        VALUES( '{$name}', '{$lastname}' )";
        DB::insert($sql, []);
    }
    public static function updateItem($item, $id){
        $name = $item["name"];
        $lastname = $item["lastname"];
        $sql =  "UPDATE profiles SET
        name = '{$name}',  lastname =  '{$lastname}'
        WHERE id = {$id}";
        DB::update($sql, []);
    }
    public static function deleteItem($id){
        $sql = "DELETE FROM profiles WHERE id = {$id}";
        DB::delete($sql, []);
    }
                                                                                    
}
