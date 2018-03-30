<?php

namespace App\Http\Controllers;

use App\Bitcoin;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class BitcoinController extends Controller
{
    protected $coinMarketCapApiEndpoint = 'https://api.coinmarketcap.com/v1/ticker/bitcoin';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fetch() {
        $client = new Client(); //GuzzleHttp\Client
        $response_usd = $client->request('GET',  $this->coinMarketCapApiEndpoint . '?convert=EUR');
        $response_aud = $client->request('GET',  $this->coinMarketCapApiEndpoint . '?convert=AUD');

        if($response_usd->getStatusCode() === 200) {

            $data = (array) json_decode($response_usd->getBody())[0];

            // add AUD price
            if($response_aud->getStatusCode() === 200) {
                $data_aud = (array) json_decode($response_aud->getBody())[0];
                $data['price_aud'] = $data_aud['price_aud'];
            }

            // get previous bitcoin data from our database since last login
            $lastBitcoin = Bitcoin::orderBy('id', 'desc')->first();

            // if it exists and last_updated doesn't match, save new data
            if($lastBitcoin) {
                $lastBitcoinData = json_decode($lastBitcoin->data);
                $data['last_price_usd'] = $lastBitcoinData->price_usd;

                if ($lastBitcoinData->last_updated !== $data['last_updated']) {
                    Bitcoin::create(['last_updated' => $data['last_updated'], 'data' => json_encode($data)]);
                }
            } else {
                $data['last_price_usd'] = $data['price_usd'];
                Bitcoin::create(['last_updated' => $data['last_updated'], 'data' => json_encode($data)]);
            }
        }
        return $data;
    }
}
