<?php

namespace Printi\CimpressBundle\Services;

use GuzzleHttp\Client;

/**
 * Class Cimpress
 */
class Cimpress
{
    const BASE_URL = 'https://cimpress.auth0.com/oauth/ro';

    private $credentials;
    private $clientId;

    private $token;

    public function __construct(array $credentials, string $clientId)
    {
        $this->credentials = $credentials;
        $this->clientId = $clientId;
    }

    protected function authorize()
    {
        $client      = new Client();
        $response    = $client->post(
            self::BASE_URL,
            [
                'form_params' => array_merge(
                    [
                        'client_id' => $this->clientId,
                    ],
                    $this->credentials
                ),
            ]
        );
        $this->token = json_decode($response->getBody())->id_token;

        return $this;
    }

    protected function getToken($bearer = false)
    {
        return $bearer ? sprintf('Bearer %s', $this->token) : $this->token;
    }
}
