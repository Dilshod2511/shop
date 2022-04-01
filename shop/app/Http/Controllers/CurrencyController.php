<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;


class CurrencyController extends Controller
{
    public  function index()
    {

        $url = "https://openexchangerates.org/api/currencies.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responses = curl_exec ($ch);
        curl_close ($ch);
        $responses=json_decode($responses);

        foreach ($responses as $key=>$value){
            $contry=new  Currency();
            $contry->short_name=$key;
            $contry->country=$value;
            $contry->save();
        }


        return "Currencies tablega malumotlar qo'shildi!.";

    }

}
