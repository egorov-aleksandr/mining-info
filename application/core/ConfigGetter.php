<?php
class ConfigGetter
{

    public static function getApiKey() : string
    {
        $data = file_get_contents('application/config/config.json');
        $data = json_decode($data, true);
        $apiKey = $data['key'];

        if(!$apiKey){
            $apiKey = 'ERROR';
        }

        return $apiKey;
    }

}
