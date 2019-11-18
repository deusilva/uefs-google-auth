<?php

namespace UEFSGoogleAuth\Auth\Google;

use Google_Client;

abstract class AbstractGoogleService implements GoogleService {

    /** @var Google_Client */
    protected $client;

    /**
     * Class constructor.
     */
    public function __construct(Google_Client $client, string $serviceAccountPath)
    {
        $this->client = $client;
        $this->client->setScopes(
            $this->getScopes()
        );
        if(!empty($serviceAccountPath)) {
            putenv('GOOGLE_APPLICATION_CREDENTIALS='.$serviceAccountPath);
            $this->client->useApplicationDefaultCredentials();
        } else {
            throw \Exception("É necessário a conta de serviço ou chave de API");
        }
    }

    public function getService()
    {
        throw new \Exception("Child class must implement this method");
    }

    public function getScopes()
    {
        throw new \Exception("Child class must implement this method");
    }

}