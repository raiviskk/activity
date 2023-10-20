<?php


namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class Api
{
    private Client $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client();
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function fetchRandomActivity(): Activity
    {
        $response = $this->httpClient->get('https://www.boredapi.com/api/activity');
        $data = json_decode($response->getBody(), false, 512, JSON_THROW_ON_ERROR);

        return new Activity(
            $data->activity,
            $data->type,
            $data->participants,
            $data->price,
            $data->link
        );
    }
}
