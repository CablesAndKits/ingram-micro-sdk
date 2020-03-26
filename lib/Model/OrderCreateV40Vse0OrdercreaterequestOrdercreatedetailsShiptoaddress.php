<?php
/**
 * OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsShiptoaddress
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
 * OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsShiptoaddress Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsShiptoaddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderCreate_v4_0_vse0_ordercreaterequest_ordercreatedetails_shiptoaddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attention' => 'string',
'addressline1' => 'string',
'addressline2' => 'string',
'addressline3' => 'string',
'city' => 'string',
'state' => 'string',
'postalcode' => 'string',
'countrycode' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attention' => null,
'addressline1' => null,
'addressline2' => null,
'addressline3' => null,
'city' => null,
'state' => null,
'postalcode' => null,
'countrycode' => null    ];

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
        'attention' => 'attention',
'addressline1' => 'addressline1',
'addressline2' => 'addressline2',
'addressline3' => 'addressline3',
'city' => 'city',
'state' => 'state',
'postalcode' => 'postalcode',
'countrycode' => 'countrycode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attention' => 'setAttention',
'addressline1' => 'setAddressline1',
'addressline2' => 'setAddressline2',
'addressline3' => 'setAddressline3',
'city' => 'setCity',
'state' => 'setState',
'postalcode' => 'setPostalcode',
'countrycode' => 'setCountrycode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attention' => 'getAttention',
'addressline1' => 'getAddressline1',
'addressline2' => 'getAddressline2',
'addressline3' => 'getAddressline3',
'city' => 'getCity',
'state' => 'getState',
'postalcode' => 'getPostalcode',
'countrycode' => 'getCountrycode'    ];

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
        $this->container['attention'] = isset($data['attention']) ? $data['attention'] : null;
        $this->container['addressline1'] = isset($data['addressline1']) ? $data['addressline1'] : null;
        $this->container['addressline2'] = isset($data['addressline2']) ? $data['addressline2'] : null;
        $this->container['addressline3'] = isset($data['addressline3']) ? $data['addressline3'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postalcode'] = isset($data['postalcode']) ? $data['postalcode'] : null;
        $this->container['countrycode'] = isset($data['countrycode']) ? $data['countrycode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['addressline1'] === null) {
            $invalidProperties[] = "'addressline1' can't be null";
        }
        if ($this->container['addressline2'] === null) {
            $invalidProperties[] = "'addressline2' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['postalcode'] === null) {
            $invalidProperties[] = "'postalcode' can't be null";
        }
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
     * Gets attention
     *
     * @return string
     */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
     * Sets attention
     *
     * @param string $attention Customer contact name
     *
     * @return $this
     */
    public function setAttention($attention)
    {
        $this->container['attention'] = $attention;

        return $this;
    }

    /**
     * Gets addressline1
     *
     * @return string
     */
    public function getAddressline1()
    {
        return $this->container['addressline1'];
    }

    /**
     * Sets addressline1
     *
     * @param string $addressline1 Company Name or person to deliver.  *If there isn’t an attention line please add the company name on address line 1.   UPS and FedEx will create surcharges if address line 1 contains a physical address.
     *
     * @return $this
     */
    public function setAddressline1($addressline1)
    {
        $this->container['addressline1'] = $addressline1;

        return $this;
    }

    /**
     * Gets addressline2
     *
     * @return string
     */
    public function getAddressline2()
    {
        return $this->container['addressline2'];
    }

    /**
     * Sets addressline2
     *
     * @param string $addressline2 Street address for delivery
     *
     * @return $this
     */
    public function setAddressline2($addressline2)
    {
        $this->container['addressline2'] = $addressline2;

        return $this;
    }

    /**
     * Gets addressline3
     *
     * @return string
     */
    public function getAddressline3()
    {
        return $this->container['addressline3'];
    }

    /**
     * Sets addressline3
     *
     * @param string $addressline3 Continuation of address line 2
     *
     * @return $this
     */
    public function setAddressline3($addressline3)
    {
        $this->container['addressline3'] = $addressline3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Ship to city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Ship to State or Region
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postalcode
     *
     * @return string
     */
    public function getPostalcode()
    {
        return $this->container['postalcode'];
    }

    /**
     * Sets postalcode
     *
     * @param string $postalcode Ship to Zip code or Postal code
     *
     * @return $this
     */
    public function setPostalcode($postalcode)
    {
        $this->container['postalcode'] = $postalcode;

        return $this;
    }

    /**
     * Gets countrycode
     *
     * @return string
     */
    public function getCountrycode()
    {
        return $this->container['countrycode'];
    }

    /**
     * Sets countrycode
     *
     * @param string $countrycode Ship to country
     *
     * @return $this
     */
    public function setCountrycode($countrycode)
    {
        $this->container['countrycode'] = $countrycode;

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