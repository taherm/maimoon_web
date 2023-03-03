<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use Illuminate\Http\Request;

class BackendHome extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        /*

        $api = new \Binance\API(env('BINANCE_API_KEY'), env('BINANCE_API_SECRET'));
        $api->useServerTime();
        $ticker = $api->prices();
        $balances = $api->balances($ticker);
        //$account = $api->balances();
        $totalBTC = 0;
        //dd(collect($balances));
        $allData = collect($balances);
        //dd($allData);
        foreach ($allData as $balance) {
            $totalBTC = $totalBTC + $balance['btcTotal'];
        }
        //dd(date('Y-m-d H:i:s'));
        // dd($totalBTC);

        // BTC to USD API

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://blockchain.info/ticker',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cfduid=d9b973aac87acf1910236c31ce8e8c1841614014385'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = (\GuzzleHttp\json_decode($response));

        $USDtoBTC = $response->USD->last;

        $totalBalance = $totalBTC * $USDtoBTC;
*/
        // $totalBalance = Balance::find(1)->pluck('balance')->first();
        return view('backend.home');
    }
}
