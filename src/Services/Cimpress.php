<?php

namespace Printi\CimpressBundle\Services;

use GuzzleHttp\Client;

/**
 * Class Cimpress
 */
class Cimpress
{
    const BASE_URL = 'https://cimpress.auth0.com/oauth/ro';

    /** @var array The Cimpress credentials */
    private $credentials;

    /** @var string The api client id */
    private $clientId;

    /** @var  string The authorize token */
    private $token;

    /**
     * Cimpress constructor.
     *
     * @param array  $credentials The cimpress credentials
     * @param string $clientId    The client id
     */
    public function __construct(array $credentials, string $clientId)
    {
        $this->credentials = $credentials;
        $this->clientId = $clientId;
    }

    /**
     * Authorize with cimpress
     *
     * @return $this
     */
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

    /**
     * Get Authorize token
     *
     * @param bool $bearer
     *
     * @return string
     */
    protected function getToken($bearer = false)
    {
        return $bearer ? sprintf('Bearer %s', $this->token) : $this->token;
    }
}
