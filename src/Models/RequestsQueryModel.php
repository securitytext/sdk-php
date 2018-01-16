<?php
/*
 * SecuritytextOrgAPILib
 *
 * This file was automatically generated for SecurityTextOrg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SecuritytextOrgAPILib\Models;

use JsonSerializable;

/**
 * Query request
 */
class RequestsQueryModel implements JsonSerializable
{
    /**
     * Name of Domain to query
     * @required
     * @var string $domain public property
     */
    public $domain;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $domain Initialization value for $this->domain
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->domain = func_get_arg(0);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed  $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['domain'] = $this->domain;

        return array_merge($json, $this->additionalProperties);
    }
}
