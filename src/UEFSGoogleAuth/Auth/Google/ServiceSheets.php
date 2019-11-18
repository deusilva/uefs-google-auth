<?php

namespace UEFSGoogleAuth\Auth\Google;

use Google_Client;
use Google_Service_Sheets;

class ServiceSheets extends AbstractGoogleService {

    /**
     * 
     *
     * @return Google_Service_Sheets
     */
    public function getService()
    {
        $service = new Google_Service_Sheets($this->client);
        return $service;
    }

    /**
     * 
     *
     * @return array
     */
    public function getScopes() {
        return [
            Google_Service_Sheets::SPREADSHEETS
        ];
    }

}
