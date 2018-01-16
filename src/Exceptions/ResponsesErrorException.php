<?php
/*
 * SecuritytextOrgAPILib
 *
 * This file was automatically generated for SecurityTextOrg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SecuritytextOrgAPILib\Exceptions;

use SecuritytextOrgAPILib\APIException;
use SecuritytextOrgAPILib\APIHelper;

/**
 * Error response
 */
class ResponsesErrorException extends APIException
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @var object|null $errors public property
     */
    public $errors;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context);
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
        APIHelper::deserialize(self::getResponseBody(), $this, false, false);
    }
}
