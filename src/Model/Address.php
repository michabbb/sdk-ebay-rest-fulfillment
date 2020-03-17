<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * OpenAPI spec version: 1.11.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\fulfillment\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\fulfillment\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description This type contains the details of a shipping address. This type is used by the getOrder and getOrders methods to show the buyer&#39;s shipping address, and is also used by the getPaymentDispute method to show the return shipping address when a buyer is returning an item for a refund.
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'countryCode' => 'string',
        'county' => 'string',
        'postalCode' => 'string',
        'stateOrProvince' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'addressLine1' => null,
        'addressLine2' => null,
        'city' => null,
        'countryCode' => null,
        'county' => null,
        'postalCode' => null,
        'stateOrProvince' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'city' => 'city',
        'countryCode' => 'countryCode',
        'county' => 'county',
        'postalCode' => 'postalCode',
        'stateOrProvince' => 'stateOrProvince'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'city' => 'setCity',
        'countryCode' => 'setCountryCode',
        'county' => 'setCounty',
        'postalCode' => 'setPostalCode',
        'stateOrProvince' => 'setStateOrProvince'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'city' => 'getCity',
        'countryCode' => 'getCountryCode',
        'county' => 'getCounty',
        'postalCode' => 'getPostalCode',
        'stateOrProvince' => 'getStateOrProvince'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['addressLine1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['addressLine2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['stateOrProvince'] = isset($data['stateOrProvince']) ? $data['stateOrProvince'] : null;
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
     * Gets addressLine1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string|null $addressLine1 The first line of the street address.
     *
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string|null $addressLine2 The second line of the street address. This field can be used for additional address information, such as a suite or apartment number. This field will be returned if defined for the shipping address.
     *
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city of the shipping destination.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode The country of the shipping destination, represented as a two-letter ISO 3166-1 alpha-2 country code. For example, US represents the United States, and DE represents Germany. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/CountryCodeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county The county of the shipping destination. Counties typically, but not always, contain multiple cities or towns. This field is returned if known/available.
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode The postal code of the shipping destination. Usually referred to as Zip codes in the US. Most countries have postal codes, but not all. The postal code will be returned if applicable.
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets stateOrProvince
     *
     * @return string|null
     */
    public function getStateOrProvince()
    {
        return $this->container['stateOrProvince'];
    }

    /**
     * Sets stateOrProvince
     *
     * @param string|null $stateOrProvince The state or province of the shipping destination. Most countries have states or provinces, but not all. The state or province will be returned if applicable.
     *
     * @return $this
     */
    public function setStateOrProvince($stateOrProvince)
    {
        $this->container['stateOrProvince'] = $stateOrProvince;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

