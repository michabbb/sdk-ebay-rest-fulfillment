<?php
/**
 * PaymentDisputeActivity
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
 * PaymentDisputeActivity Class Doc Comment
 *
 * @category Class
 * @description This type is used by each recorded activity on a payment dispute, from creation to resolution.
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentDisputeActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDisputeActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityType' => 'string',
        'activityDate' => 'string',
        'actor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activityType' => null,
        'activityDate' => null,
        'actor' => null
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
        'activityType' => 'activityType',
        'activityDate' => 'activityDate',
        'actor' => 'actor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityType' => 'setActivityType',
        'activityDate' => 'setActivityDate',
        'actor' => 'setActor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityType' => 'getActivityType',
        'activityDate' => 'getActivityDate',
        'actor' => 'getActor'
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
        $this->container['activityType'] = isset($data['activityType']) ? $data['activityType'] : null;
        $this->container['activityDate'] = isset($data['activityDate']) ? $data['activityDate'] : null;
        $this->container['actor'] = isset($data['actor']) ? $data['actor'] : null;
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
     * Gets activityType
     *
     * @return string|null
     */
    public function getActivityType()
    {
        return $this->container['activityType'];
    }

    /**
     * Sets activityType
     *
     * @param string|null $activityType This enumeration value indicates the type of activity that occured on the payment dispute. For example, a value of DISPUTE_OPENED is returned when a payment disute is first created, a value indicating the seller's decision on the dispute, such as SELLER_CONTEST, is returned when seller makes a decision to accept or contest dispute, and a value of DISPUTE_CLOSED is returned when a payment disute is resolved. See ActivityEnum for an explanation of each of the values that may be returned here. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/ActivityEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setActivityType($activityType)
    {
        $this->container['activityType'] = $activityType;

        return $this;
    }

    /**
     * Gets activityDate
     *
     * @return string|null
     */
    public function getActivityDate()
    {
        return $this->container['activityDate'];
    }

    /**
     * Sets activityDate
     *
     * @param string|null $activityDate The timestamp in this field shows the date/time of the payment dispute activity. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return $this
     */
    public function setActivityDate($activityDate)
    {
        $this->container['activityDate'] = $activityDate;

        return $this;
    }

    /**
     * Gets actor
     *
     * @return string|null
     */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
     * Sets actor
     *
     * @param string|null $actor This enumeration value indicates the actor that performed the action. Possible values include the BUYER, SELLER, CS_AGENT (eBay customer service), or SYSTEM. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/ActorEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;

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


