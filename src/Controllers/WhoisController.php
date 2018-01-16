<?php
/*
 * SecuritytextOrgAPILib
 *
 * This file was automatically generated for SecurityTextOrg by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SecuritytextOrgAPILib\Controllers;

use SecuritytextOrgAPILib\APIException;
use SecuritytextOrgAPILib\APIHelper;
use SecuritytextOrgAPILib\Configuration;
use SecuritytextOrgAPILib\Models;
use SecuritytextOrgAPILib\Exceptions;
use SecuritytextOrgAPILib\Http\HttpRequest;
use SecuritytextOrgAPILib\Http\HttpResponse;
use SecuritytextOrgAPILib\Http\HttpMethod;
use SecuritytextOrgAPILib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class WhoisController extends BaseController
{
    /**
     * @var WhoisController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return WhoisController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Query the server for a Domain object
     *
     * @param Models\RequestsQueryModel $body Body of API request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createApiWhoisQuery(
        $body
    ) {
        //check that all required arguments are provided
        if (!isset($body)) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/query';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'securitytextorg-sdk/v1',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($body));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        //return null on 404
        if ($response->code == 404) {
            return null;
        }
        if ($response->code == 400) {
            throw new Exceptions\ResponsesErrorException('Bad Request', $_httpContext);
        }

        if ($response->code == 406) {
            throw new Exceptions\ResponsesErrorException('Not Acceptable', $_httpContext);
        }

        if ($response->code == 500) {
            throw new Exceptions\ResponsesErrorException('Internal Server Error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'SecuritytextOrgAPILib\\Models\\ResponsesQueryModel');
    }
}
