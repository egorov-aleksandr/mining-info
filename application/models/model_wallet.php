<?php
require_once 'vendor/autoload.php';
class Model_Wallet extends Model
{
	
	public function get_data()
	{
        include "application/core/ConfigGetter.php";
        $apiKey = ConfigGetter::getApiKey();
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://www.mining-dutch.nl/pools/scrypt.php?page=api&action=getuserstatus&api_key=33d0525e893a7361b6084576ab7d77b6cfed3df97301c31131a6519ba4506076&id=154587');
        $body =  $res->getBody();

        return $body;
	}

}
