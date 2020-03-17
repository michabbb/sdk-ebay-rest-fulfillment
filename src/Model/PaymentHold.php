<?php
/**
 * PaymentHold
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
 * PaymentHold Class Doc Comment
 *
 * @category Class
 * @description This type contains information about a hold placed on a payment to a seller for an order, including the reason why the buyer&#39;s payment for the order is being held, the expected release date of the funds into the seller&#39;s account, the current state of the hold, and the actual release date if the payment has been released, and possible actions the seller can take to expedite the payout of funds into their account.
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentHold implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentHold';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expectedReleaseDate' => 'string',
        'holdAmount' => '\macropage\SDKs\ebay\rest\fulfillment\Model\Amount',
        'holdReason' => 'string',
        'holdState' => 'string',
        'releaseDate' => 'string',
        'sellerActionsToRelease' => '\macropage\SDKs\ebay\rest\fulfillment\Model\SellerActionsToRelease[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'expectedReleaseDate' => null,
        'holdAmount' => null,
        'holdReason' => null,
        'holdState' => null,
        'releaseDate' => null,
        'sellerActionsToRelease' => null
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
        'expectedReleaseDate' => 'expectedReleaseDate',
        'holdAmount' => 'holdAmount',
        'holdReason' => 'holdReason',
        'holdState' => 'holdState',
        'releaseDate' => 'releaseDate',
        'sellerActionsToRelease' => 'sellerActionsToRelease'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expectedReleaseDate' => 'setExpectedReleaseDate',
        'holdAmount' => 'setHoldAmount',
        'holdReason' => 'setHoldReason',
        'holdState' => 'setHoldState',
        'releaseDate' => 'setReleaseDate',
        'sellerActionsToRelease' => 'setSellerActionsToRelease'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expectedReleaseDate' => 'getExpectedReleaseDate',
        'holdAmount' => 'getHoldAmount',
        'holdReason' => 'getHoldReason',
        'holdState' => 'getHoldState',
        'releaseDate' => 'getReleaseDate',
        'sellerActionsToRelease' => 'getSellerActionsToRelease'
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
        $this->container['expectedReleaseDate'] = isset($data['expectedReleaseDate']) ? $data['expectedReleaseDate'] : null;
        $this->container['holdAmount'] = isset($data['holdAmount']) ? $data['holdAmount'] : null;
        $this->container['holdReason'] = isset($data['holdReason']) ? $data['holdReason'] : null;
        $this->container['holdState'] = isset($data['holdState']) ? $data['holdState'] : null;
        $this->container['releaseDate'] = isset($data['releaseDate']) ? $data['releaseDate'] : null;
        $this->container['sellerActionsToRelease'] = isset($data['sellerActionsToRelease']) ? $data['sellerActionsToRelease'] : null;
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
     * Gets expectedReleaseDate
     *
     * @return string|null
     */
    public function getExpectedReleaseDate()
    {
        return $this->container['expectedReleaseDate'];
    }

    /**
     * Sets expectedReleaseDate
     *
     * @param string|null $expectedReleaseDate The date and time that the payment being held is expected to be released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field will be returned if known by eBay. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setExpectedReleaseDate($expectedReleaseDate)
    {
        $this->container['expectedReleaseDate'] = $expectedReleaseDate;

        return $this;
    }

    /**
     * Gets holdAmount
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\Amount|null
     */
    public function getHoldAmount()
    {
        return $this->container['holdAmount'];
    }

    /**
     * Sets holdAmount
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\Amount|null $holdAmount holdAmount
     *
     * @return $this
     */
    public function setHoldAmount($holdAmount)
    {
        $this->container['holdAmount'] = $holdAmount;

        return $this;
    }

    /**
     * Gets holdReason
     *
     * @return string|null
     */
    public function getHoldReason()
    {
        return $this->container['holdReason'];
    }

    /**
     * Sets holdReason
     *
     * @param string|null $holdReason The reason that the payment is being held. A seller's payment may be helf for a number of reasons, including when the seller is new, the seller's level is below standard, or if a return case or 'Significantly not as described' case is pending against the seller. This field is always returned with the paymentHolds array.
     *
     * @return $this
     */
    public function setHoldReason($holdReason)
    {
        $this->container['holdReason'] = $holdReason;

        return $this;
    }

    /**
     * Gets holdState
     *
     * @return string|null
     */
    public function getHoldState()
    {
        return $this->container['holdState'];
    }

    /**
     * Sets holdState
     *
     * @param string|null $holdState The current stage or condition of the hold. This field is always returned with the paymentHolds array. Applicable values: HELD HELD_PENDING NOT_HELD RELEASE_CONFIRMED RELEASE_FAILED RELEASE_PENDING RELEASED
     *
     * @return $this
     */
    public function setHoldState($holdState)
    {
        $this->container['holdState'] = $holdState;

        return $this;
    }

    /**
     * Gets releaseDate
     *
     * @return string|null
     */
    public function getReleaseDate()
    {
        return $this->container['releaseDate'];
    }

    /**
     * Sets releaseDate
     *
     * @param string|null $releaseDate The date and time that the payment being held was actually released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the seller's payment is actually released into the seller's account. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setReleaseDate($releaseDate)
    {
        $this->container['releaseDate'] = $releaseDate;

        return $this;
    }

    /**
     * Gets sellerActionsToRelease
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\SellerActionsToRelease[]|null
     */
    public function getSellerActionsToRelease()
    {
        return $this->container['sellerActionsToRelease'];
    }

    /**
     * Sets sellerActionsToRelease
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\SellerActionsToRelease[]|null $sellerActionsToRelease A list of one or more possible actions that the seller can take to expedite the release of the payment hold.
     *
     * @return $this
     */
    public function setSellerActionsToRelease($sellerActionsToRelease)
    {
        $this->container['sellerActionsToRelease'] = $sellerActionsToRelease;

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

