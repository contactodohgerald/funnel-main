<?php

namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait EbookHandler
{

    private $APIKey = '3c84276a0d254cac86b008ab30918286';
    private $googleAPIKey = 'AIzaSyDYeCnXxVEx9_yrDq4h8QVZs5dBR1nPnU4';
    private $extractorAPIKey = '67c8dbb05eba9ec9a3ff2f5473865432826b5eb2';

    function fetchArticles($query){
        $api_key = $this->APIKey;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $api_key,
        ])->get('https://newsapi.org/v2/everything', [
            'q' => $query,
            'sortBy' => 'popularity',
            'apiKey' => $api_key,
        ]);
        $decoded_response = json_decode($response, true);

        return $decoded_response['articles'];
    }

    function fetchFontFamily(){
        $api_key = $this->googleAPIKey;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->get('https://www.googleapis.com/webfonts/v1/webfonts', [
            'sort' => 'popularity',
            'key' => $api_key,
        ]);

        $decoded_response = json_decode($response, true);

        return $decoded_response['items'];
    }

    function fetchArticlesFromUrl($url){
        $api_key = $this->extractorAPIKey;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->get('https://extractorapi.com/api/v1/extractor/', [
            'url' => $url,
            'apikey' => $api_key,
        ]);

        $decoded_response = json_decode($response, true);

        return $decoded_response;
    }


}
