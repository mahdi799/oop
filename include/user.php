<?php

class User
{
    public $id;
    public $givenName;
    public $familyName;
    public $email;



    public static function find_all_users()
    {
       return self::find_this_query("SELECT * FROM user");
    }

    public static function user_id($userID)
    {
        global $database;
        $result_id= self::find_this_query("SELECT * FROM user where id =$userID LIMIT 1");
        $found_user=mysqli_fetch_array($result_id);
        return $found_user;
    }
    public  static function find_this_query($sql)
    {
        global  $database;
        $result_set = $database->query($sql);
        return $result_set;
    }

    public static function instantation($result_id)
    {
        $the_object= new self;
        $the_object->id =         $result_id['id'];
        $the_object->givenName  = $result_id['givenName'];
        $the_object->familyName = $result_id['familyName'];
        $the_object->email      = $result_id['email'];

        return $the_object;

    }

}
?>