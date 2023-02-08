<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopGainersController extends Controller
{
    public function index()
    {
        $url = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=50&page=1&sparkline=false&price_change_percentage=24h&exchange=binance';
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        usort($data, function($a, $b) {
            return $b['price_change_percentage_24h'] <=> $a['price_change_percentage_24h'];
        });

        $count = 1;
        foreach ($data as &$coin) {
            $coin['rank'] = $count;
            $count++;
        }

        return view('TopGainers', [
            'coins' => $data,
        ]);
    }
}