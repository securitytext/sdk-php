<?php
/*
 * SecuritytextOrgAPILib
 *
 * This file was automatically generated for SecurityTextOrg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SecuritytextOrgAPILib\Models;

use JsonSerializable;

/**
 * Query response
 */
class ResponsesQueryModel implements JsonSerializable
{
    /**
     * Query matched exactly one Domain object
     * @required
     * @var bool $found public property
     */
    public $found;

    /**
     * Status of matched Domain object (if any)
     * @required
     * @var integer $status public property
     */
    public $status;

    /**
     * Text output of Query
     * @required
     * @var string $output public property
     */
    public $output;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool    $found  Initialization value for $this->found
     * @param integer $status Initialization value for $this->status
     * @param string  $output Initialization value for $this->output
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->found  = func_get_arg(0);
            $this->status = func_get_arg(1);
            $this->output = func_get_arg(2);
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
        $json['found']  = $this->found;
        $json['status'] = $this->status;
        $json['output'] = $this->output;

        return array_merge($json, $this->additionalProperties);
    }
}
