<?php

namespace UEFSGoogleAuth\Auth\Google;

use Google_Client;

class GoogleServiceFactory {

    const APPLICATION_NAME = 'Google API Integration';
    private $serviceAccountPath = '../service-account.json';

    private function getGoogleClient() {
        
        $client = new Google_Client();
        $client->setApplicationName(self::APPLICATION_NAME);

        // @todo Change to another account on uefs.br with admin privileges.
        // I believe that creating an new account like api@uefs.br for this purpose would be more appropriate
        $client->setSubject('deusilva@uefs.br');

        return $client;

    }

    /**
     * Get Google Service Directory
     *
     * @return ServiceDirectory
     */
    public function getGoogleServiceDirectory() {
        return new ServiceDirectory($this->getGoogleClient(), $this->serviceAccountPath);
    }

    /**
     * Get Google Service Sheets
     *
     * @return ServiceSheets
     */
    public function getGoogleServiceSheets() {
        return new ServiceSheets($this->getGoogleClient(), $this->serviceAccountPath);
    }

    /**
     * Get Google Service Gmail
     *
     * @return ServiceGmail
     */
    public function getGoogleServiceGmail() {
        return new ServiceGmail($this->getGoogleClient(), $this->serviceAccountPath);
    }

    public function getServiceAccountPath() {
        return $this->serviceAccountPath;
    }

    public function setServiceAccountPath(string $serviceAccountPath) {
        $this->serviceAccountPath = $serviceAccountPath;
    }

}