<?php

namespace App\Traits;

trait EbookHandler
{

    private $APIKey = '3c84276a0d254cac86b008ab30918286';

    function fetchArticles($query, $page_size, $page)
    {
        $api_key = $this->APIKey;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://newsapi.org/v2/everything?q={$query}&sortBy=relevancy&apiKey={$api_key}&page_size={$page_size}&page={$page}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer $api_key"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $decoded_response = json_decode($response, true);

        return $decoded_response;
    }
}
