<?php
require_once 'vendor/autoload.php';
class Model_Workers extends Model
{

    public function get_data()
    {
        include "application/core/ConfigGetter.php";
        $apiKey = ConfigGetter::getApiKey();
        $client = new GuzzleHttp\Client();

        $res = $client->request('GET', 'https://www.mining-dutch.nl/pools/sha256.php?page=api&action=getuserworkers&api_key='.$apiKey.'&id=');
        $response =  json_decode($res->getBody()->getContents(), true);
        $body['Sha256'] = $response['getuserworkers']['data']['miners'];

        $res = $client->request('GET', 'https://www.mining-dutch.nl/pools/scrypt.php?page=api&action=getuserworkers&api_key='.$apiKey.'&id=');
        $response =  json_decode($res->getBody()->getContents(), true);
        $body['Scrypt'] = $response['getuserworkers']['data']['miners'];

        return $body;
    }

}
