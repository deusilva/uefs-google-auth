<?php

namespace UEFSGoogleAuth\Auth\Google;

use Google_Service_Gmail;

class ServiceGmail extends AbstractGoogleService {

    /**
     * 
     *
     * @return Google_Service_Gmail
     */
    public function getService()
    {
        $service = new Google_Service_Gmail($this->client);
        return $service;
    }

    /**
     * 
     *
     * @return array
     */
    public function getScopes() {
        return [
            Google_Service_Gmail::GMAIL_SEND
        ];
    }

}
