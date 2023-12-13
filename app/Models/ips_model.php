<?php

namespace App\Models;


class ips_model 
{
    private static $ekonomi1 =[
        "judul" => "ekonomi 1",
        "isi" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui ut doloribus laborum culpa ipsam deleniti? 
        Iusto delectus asperiores quas a rerum necessitatibus vitae laudantium doloribus voluptates nostrum, nobis 
        aperiam totam. Tempora necessitatibus nisi fugit! Esse inventore repellat ad itaque repudiandae officiis fugit unde 
        asperiores odio. Voluptate, quidem aliquam provident vel nihil rem ullam nisi dolores porro a saepe quaerat veniam minima 
        voluptatum fuga non libero 
        ipsam exercitationem impedit velit nesciunt omnis itaque adipisci. Ullam unde, in consequuntur fugiat temporibus aspernatur."
    ];

    public static function all(){
        return self::$ekonomi1;
    }
}
