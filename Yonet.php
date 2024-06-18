<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site()
    {
      $datas["yazi1"] = "PHP Türkiye";
      $datas["yazi2"] = "Web Sitemize hoşgeldiniz!";
      $datas["yazi3"] = "Hizmetlerimiz";
      $datas["yazi4"] = "web tasarim ve yazılım Hizmetleri";
      $datas["yazi5"] = "Bize ulaşın!";
        return view('web', $datas);
    }
}
