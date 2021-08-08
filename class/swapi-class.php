<?php

class swapi
{
    private $base_url = 'https://swapi.dev/api/';
    public $resource;
    private $schema = '';

    /**
     * MÉTODO GET DATA RESOURCE
     * 
     *  - 
     */
    public function getDataResource($url, $resource, $field = null)
    {
        // Remove os campos indesejados da URL
        $text = array($this->base_url, $resource.'/');
        $st = str_replace($text, "", $url);

        // Atualiza os atributos da Classe
        $this->resource = $resource;
        $this->schema = '/' . $st;

        // Busca os dados do Recurso
        $data = $this->getDataApi();

        // Verifica se foi enviado algum campo
        if (!empty($field)) {
            return $data->$field;
        } else {
            return $data;
        }
    }

    /**
     * MÉTODO SEARCH RESOURCE
     * 
     *  - Busca pelo recurso desejado
     */
    public function searchResource($search)
    {
        $this->schema = '/?search='.$search;

        $url = $this->base_url . $this->resource . $this->schema;

        $data = $this->getDataApi();

        return $data;
    }

    /**
     * MÉTODO GET DATA API
     * 
     *  - Busca os dados desejados da API
     */
    public function getDataApi()
    {
        $url = $this->base_url . $this->resource . $this->schema;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = json_decode(curl_exec($ch));

        return $data;
    }
}
