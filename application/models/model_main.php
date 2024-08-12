<?php
require_once 'vendor/autoload.php';
class Model_Main extends Model
{

    public function get_data()
    {
        include "application/core/ConfigGetter.php";
        $apiKey = ConfigGetter::getApiKey();

        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://www.mining-dutch.nl/pools/scrypt.php?page=api&action=getuserstatus&api_key='.$apiKey.'&id=');
        $body =  json_decode($res->getBody()->getContents(), true)['getuserstatus']['data'];
        $body['apiKey'] = $apiKey;
        return $body;
    }

}

