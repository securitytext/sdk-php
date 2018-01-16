<?php
/*
 * SecuritytextOrgAPILib
 *
 * This file was automatically generated for SecurityTextOrg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SecuritytextOrgAPILib\Models;

use JsonSerializable;
use SecuritytextOrgAPILib\Utils\DateTimeHelper;

/**
 * Timestamp attributes
 */
class AttributesTimestampsModel implements JsonSerializable
{
    /**
     * Creation date
     * @required
     * @maps created_at
     * @factory \SecuritytextOrgAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * Last updated
     * @required
     * @maps updated_at
     * @factory \SecuritytextOrgAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $createdAt Initialization value for $this->createdAt
     * @param \DateTime $updatedAt Initialization value for $this->updatedAt
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->createdAt = func_get_arg(0);
            $this->updatedAt = func_get_arg(1);
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
        $json['created_at'] = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at'] = DateTimeHelper::toRfc3339DateTime($this->updatedAt);

        return array_merge($json, $this->additionalProperties);
    }
}
