<?php

class swapi
{
    private $base_url = 'https://swapi.dev/api/';

    /**
     * MÉTODO GET DATA API
     * 
     *  - Busca os dados desejados da API
     */
    public function getDataApi()
    {
        $url = $this->base_url . "planets/1/";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = json_decode(curl_exec($ch));

        return $data;
    }
}
