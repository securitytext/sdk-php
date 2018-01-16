<?php
/*
 * SecuritytextOrgAPILib
 *
 * This file was automatically generated for SecurityTextOrg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SecuritytextOrgAPILib;

use SecuritytextOrgAPILib\Controllers;

/**
 * SecuritytextOrgAPILib client class
 */
class SecuritytextOrgAPIClient
{
    /**
     * Singleton access to Whois controller
     * @return Controllers\WhoisController The *Singleton* instance
     */
    public function getWhois()
    {
        return Controllers\WhoisController::getInstance();
    }
}
