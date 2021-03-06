<?php
/**
 * EvidenceRequest
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
 * EvidenceRequest Class Doc Comment
 *
 * @category Class
 * @description This type is used by the evidenceRequests array that is returned in the getPaymentDispute response if one or more evidential documents are being requested to help resolve the payment dispute.
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EvidenceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EvidenceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'evidenceId' => 'string',
        'requestDate' => 'string',
        'respondByDate' => 'string',
        'lineItems' => '\macropage\SDKs\ebay\rest\fulfillment\Model\OrderLineItems[]',
        'evidenceType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'evidenceId' => null,
        'requestDate' => null,
        'respondByDate' => null,
        'lineItems' => null,
        'evidenceType' => null
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
        'evidenceId' => 'evidenceId',
        'requestDate' => 'requestDate',
        'respondByDate' => 'respondByDate',
        'lineItems' => 'lineItems',
        'evidenceType' => 'evidenceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evidenceId' => 'setEvidenceId',
        'requestDate' => 'setRequestDate',
        'respondByDate' => 'setRespondByDate',
        'lineItems' => 'setLineItems',
        'evidenceType' => 'setEvidenceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evidenceId' => 'getEvidenceId',
        'requestDate' => 'getRequestDate',
        'respondByDate' => 'getRespondByDate',
        'lineItems' => 'getLineItems',
        'evidenceType' => 'getEvidenceType'
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
        $this->container['evidenceId'] = isset($data['evidenceId']) ? $data['evidenceId'] : null;
        $this->container['requestDate'] = isset($data['requestDate']) ? $data['requestDate'] : null;
        $this->container['respondByDate'] = isset($data['respondByDate']) ? $data['respondByDate'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['evidenceType'] = isset($data['evidenceType']) ? $data['evidenceType'] : null;
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
     * Gets evidenceId
     *
     * @return string|null
     */
    public function getEvidenceId()
    {
        return $this->container['evidenceId'];
    }

    /**
     * Sets evidenceId
     *
     * @param string|null $evidenceId Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
     *
     * @return $this
     */
    public function setEvidenceId($evidenceId)
    {
        $this->container['evidenceId'] = $evidenceId;

        return $this;
    }

    /**
     * Gets requestDate
     *
     * @return string|null
     */
    public function getRequestDate()
    {
        return $this->container['requestDate'];
    }

    /**
     * Sets requestDate
     *
     * @param string|null $requestDate The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return $this
     */
    public function setRequestDate($requestDate)
    {
        $this->container['requestDate'] = $requestDate;

        return $this;
    }

    /**
     * Gets respondByDate
     *
     * @return string|null
     */
    public function getRespondByDate()
    {
        return $this->container['respondByDate'];
    }

    /**
     * Sets respondByDate
     *
     * @param string|null $respondByDate The timestamp in this field shows the date/time when the seller is expected to provide a requested evidential document to eBay. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return $this
     */
    public function setRespondByDate($respondByDate)
    {
        $this->container['respondByDate'] = $respondByDate;

        return $this;
    }

    /**
     * Gets lineItems
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\OrderLineItems[]|null
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\OrderLineItems[]|null $lineItems This array shows one or more order line items associated with the evidential document has been provided.
     *
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets evidenceType
     *
     * @return string|null
     */
    public function getEvidenceType()
    {
        return $this->container['evidenceType'];
    }

    /**
     * Sets evidenceType
     *
     * @param string|null $evidenceType This enumeration value shows the type of evidential document provided. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/EvidenceTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setEvidenceType($evidenceType)
    {
        $this->container['evidenceType'] = $evidenceType;

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


