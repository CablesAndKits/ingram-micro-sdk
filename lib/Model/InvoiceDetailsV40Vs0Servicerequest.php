<?php
/**
 * InvoiceDetailsV40Vs0Servicerequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ingram Micro eCommerce APIs
 *
 * Ingram Micro API collection for automating eCommerce business processes including orering and product search.
 *
 * OpenAPI spec version: 1.0
 * Contact: apiportalsupport@ingrammicro.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.14
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InvoiceDetailsV40Vs0Servicerequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceDetailsV40Vs0Servicerequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceDetails_v4_0_vs0_servicerequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'requestpreamble' => '\Swagger\Client\Model\InvoiceDetailsV40Vs0ServicerequestRequestpreamble',
'invoicedetailrequest' => '\Swagger\Client\Model\InvoiceDetailsV40Vs0ServicerequestInvoicedetailrequest'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'requestpreamble' => null,
'invoicedetailrequest' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'requestpreamble' => 'requestpreamble',
'invoicedetailrequest' => 'invoicedetailrequest'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requestpreamble' => 'setRequestpreamble',
'invoicedetailrequest' => 'setInvoicedetailrequest'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requestpreamble' => 'getRequestpreamble',
'invoicedetailrequest' => 'getInvoicedetailrequest'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['requestpreamble'] = isset($data['requestpreamble']) ? $data['requestpreamble'] : null;
        $this->container['invoicedetailrequest'] = isset($data['invoicedetailrequest']) ? $data['invoicedetailrequest'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets requestpreamble
     *
     * @return \Swagger\Client\Model\InvoiceDetailsV40Vs0ServicerequestRequestpreamble
     */
    public function getRequestpreamble()
    {
        return $this->container['requestpreamble'];
    }

    /**
     * Sets requestpreamble
     *
     * @param \Swagger\Client\Model\InvoiceDetailsV40Vs0ServicerequestRequestpreamble $requestpreamble requestpreamble
     *
     * @return $this
     */
    public function setRequestpreamble($requestpreamble)
    {
        $this->container['requestpreamble'] = $requestpreamble;

        return $this;
    }

    /**
     * Gets invoicedetailrequest
     *
     * @return \Swagger\Client\Model\InvoiceDetailsV40Vs0ServicerequestInvoicedetailrequest
     */
    public function getInvoicedetailrequest()
    {
        return $this->container['invoicedetailrequest'];
    }

    /**
     * Sets invoicedetailrequest
     *
     * @param \Swagger\Client\Model\InvoiceDetailsV40Vs0ServicerequestInvoicedetailrequest $invoicedetailrequest invoicedetailrequest
     *
     * @return $this
     */
    public function setInvoicedetailrequest($invoicedetailrequest)
    {
        $this->container['invoicedetailrequest'] = $invoicedetailrequest;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}