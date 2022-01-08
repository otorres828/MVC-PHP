<?php

namespace App\Models;

use PDO;


class Contactanos extends \Core\Model
{
    public function __construct($id,$name)
    {
        $this->id=$id;
        $this->name=$name;
    }

    public static function all()
    {
        // $lista=[];
        $db = static::getDB();
        $query = $db->query('SELECT id, name FROM users');
        // foreach($stmt as $user){
        //     $lista []= new Contactanos($user['id'],$user['name']);
        // }
        // return $stmt;
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
}
