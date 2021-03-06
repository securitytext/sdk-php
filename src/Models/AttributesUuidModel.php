<?php
/*
 * SecuritytextOrgAPILib
 *
 * This file was automatically generated for SecurityTextOrg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SecuritytextOrgAPILib\Models;

use JsonSerializable;

/**
 * UUID attributes
 */
class AttributesUuidModel implements JsonSerializable
{
    /**
     * Value of UUID
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $value Initialization value for $this->value
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->value = func_get_arg(0);
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
        $json['value'] = $this->value;

        return array_merge($json, $this->additionalProperties);
    }
}
