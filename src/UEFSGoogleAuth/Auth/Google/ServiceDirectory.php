<?php

namespace UEFSGoogleAuth\Auth\Google;

use Google_Service_Directory;

class ServiceDirectory extends AbstractGoogleService {

    /**
     * 
     *
     * @return Google_Service_Directory
     */
    public function getService()
    {
        $service = new Google_Service_Directory($this->client);
        return $service;
    }

    /**
     * 
     *
     * @return array
     */
    public function getScopes() {
        return [
            Google_Service_Directory::ADMIN_DIRECTORY_USER,
            Google_Service_Directory::ADMIN_DIRECTORY_USER_ALIAS,
            Google_Service_Directory::ADMIN_DIRECTORY_GROUP,
            Google_Service_Directory::ADMIN_DIRECTORY_GROUP_MEMBER,
            Google_Service_Directory::ADMIN_DIRECTORY_ORGUNIT,
        ];
    }

}
