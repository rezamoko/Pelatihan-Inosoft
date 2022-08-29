<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PercabanganController extends Controller
{
    public function pertama(){
        function luasLingkaran(int $r){
            return round(pi()*($r*$r),2);
        }

        function kelilingLingkaran(int $r){
            return round(2*pi()*$r,2);
        }
        function luasPersegiPanjang(int $p,int $l){
            return $p*$l;
        }

        $tiga=3;
        $lima=5;
        
        for ($i=1; $i<=100 ; $i++) { 
              echo number_format($i, 2, '.', ',');

            switch ($i) {
                case ($i%3==0 and $i%5==0 ):
                    $p=$i/$tiga;
                    $l=$i/$lima;
                    echo " ".luasPersegiPanjang($p,$l)."<br>";
                    break;
                case ($i%3==0):
                    $r=$i/$tiga;
                    echo (" ".luasLingkaran($r)."<br>");
                    break;
                case ($i%5==0):
                    $r=$i/$lima;
                    echo(" ".kelilingLingkaran($r)."<br>");
                    break;
                default:
                    echo "<br>";
                    break;
            }

        }
    }
    




    public function kedua(){

      
    }
}