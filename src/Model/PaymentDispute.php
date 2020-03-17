<?php
/**
 * PaymentDispute
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
 * PaymentDispute Class Doc Comment
 *
 * @category Class
 * @description This type is used by the base response of the getPaymentDispute method. The getPaymentDispute method retrieves detailed information on a specific payment dispute.
 * @package  macropage\SDKs\ebay\rest\fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentDispute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDispute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paymentDisputeId' => 'string',
        'paymentDisputeStatus' => 'string',
        'reason' => 'string',
        'orderId' => 'string',
        'openDate' => 'string',
        'closedDate' => 'string',
        'respondByDate' => 'string',
        'lineItems' => '\macropage\SDKs\ebay\rest\fulfillment\Model\OrderLineItems[]',
        'amount' => '\macropage\SDKs\ebay\rest\fulfillment\Model\SimpleAmount',
        'resolution' => '\macropage\SDKs\ebay\rest\fulfillment\Model\PaymentDisputeOutcomeDetail',
        'returnAddress' => '\macropage\SDKs\ebay\rest\fulfillment\Model\Address',
        'sellerResponse' => 'string',
        'availableChoices' => 'string[]',
        'revision' => 'int',
        'evidence' => '\macropage\SDKs\ebay\rest\fulfillment\Model\DisputeEvidence[]',
        'evidenceRequests' => '\macropage\SDKs\ebay\rest\fulfillment\Model\EvidenceRequest[]',
        'buyerProvided' => '\macropage\SDKs\ebay\rest\fulfillment\Model\InfoFromBuyer',
        'buyerUsername' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'paymentDisputeId' => null,
        'paymentDisputeStatus' => null,
        'reason' => null,
        'orderId' => null,
        'openDate' => null,
        'closedDate' => null,
        'respondByDate' => null,
        'lineItems' => null,
        'amount' => null,
        'resolution' => null,
        'returnAddress' => null,
        'sellerResponse' => null,
        'availableChoices' => null,
        'revision' => 'int32',
        'evidence' => null,
        'evidenceRequests' => null,
        'buyerProvided' => null,
        'buyerUsername' => null
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
        'paymentDisputeId' => 'paymentDisputeId',
        'paymentDisputeStatus' => 'paymentDisputeStatus',
        'reason' => 'reason',
        'orderId' => 'orderId',
        'openDate' => 'openDate',
        'closedDate' => 'closedDate',
        'respondByDate' => 'respondByDate',
        'lineItems' => 'lineItems',
        'amount' => 'amount',
        'resolution' => 'resolution',
        'returnAddress' => 'returnAddress',
        'sellerResponse' => 'sellerResponse',
        'availableChoices' => 'availableChoices',
        'revision' => 'revision',
        'evidence' => 'evidence',
        'evidenceRequests' => 'evidenceRequests',
        'buyerProvided' => 'buyerProvided',
        'buyerUsername' => 'buyerUsername'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paymentDisputeId' => 'setPaymentDisputeId',
        'paymentDisputeStatus' => 'setPaymentDisputeStatus',
        'reason' => 'setReason',
        'orderId' => 'setOrderId',
        'openDate' => 'setOpenDate',
        'closedDate' => 'setClosedDate',
        'respondByDate' => 'setRespondByDate',
        'lineItems' => 'setLineItems',
        'amount' => 'setAmount',
        'resolution' => 'setResolution',
        'returnAddress' => 'setReturnAddress',
        'sellerResponse' => 'setSellerResponse',
        'availableChoices' => 'setAvailableChoices',
        'revision' => 'setRevision',
        'evidence' => 'setEvidence',
        'evidenceRequests' => 'setEvidenceRequests',
        'buyerProvided' => 'setBuyerProvided',
        'buyerUsername' => 'setBuyerUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paymentDisputeId' => 'getPaymentDisputeId',
        'paymentDisputeStatus' => 'getPaymentDisputeStatus',
        'reason' => 'getReason',
        'orderId' => 'getOrderId',
        'openDate' => 'getOpenDate',
        'closedDate' => 'getClosedDate',
        'respondByDate' => 'getRespondByDate',
        'lineItems' => 'getLineItems',
        'amount' => 'getAmount',
        'resolution' => 'getResolution',
        'returnAddress' => 'getReturnAddress',
        'sellerResponse' => 'getSellerResponse',
        'availableChoices' => 'getAvailableChoices',
        'revision' => 'getRevision',
        'evidence' => 'getEvidence',
        'evidenceRequests' => 'getEvidenceRequests',
        'buyerProvided' => 'getBuyerProvided',
        'buyerUsername' => 'getBuyerUsername'
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
        $this->container['paymentDisputeId'] = isset($data['paymentDisputeId']) ? $data['paymentDisputeId'] : null;
        $this->container['paymentDisputeStatus'] = isset($data['paymentDisputeStatus']) ? $data['paymentDisputeStatus'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['openDate'] = isset($data['openDate']) ? $data['openDate'] : null;
        $this->container['closedDate'] = isset($data['closedDate']) ? $data['closedDate'] : null;
        $this->container['respondByDate'] = isset($data['respondByDate']) ? $data['respondByDate'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['returnAddress'] = isset($data['returnAddress']) ? $data['returnAddress'] : null;
        $this->container['sellerResponse'] = isset($data['sellerResponse']) ? $data['sellerResponse'] : null;
        $this->container['availableChoices'] = isset($data['availableChoices']) ? $data['availableChoices'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['evidence'] = isset($data['evidence']) ? $data['evidence'] : null;
        $this->container['evidenceRequests'] = isset($data['evidenceRequests']) ? $data['evidenceRequests'] : null;
        $this->container['buyerProvided'] = isset($data['buyerProvided']) ? $data['buyerProvided'] : null;
        $this->container['buyerUsername'] = isset($data['buyerUsername']) ? $data['buyerUsername'] : null;
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
     * Gets paymentDisputeId
     *
     * @return string|null
     */
    public function getPaymentDisputeId()
    {
        return $this->container['paymentDisputeId'];
    }

    /**
     * Sets paymentDisputeId
     *
     * @param string|null $paymentDisputeId This is the unique identifier of the payment dispute. This is the same identifier that is pass in to the call URI. This identifier is automatically created by eBay once the payment dispute comes into the eBay managed payments system.
     *
     * @return $this
     */
    public function setPaymentDisputeId($paymentDisputeId)
    {
        $this->container['paymentDisputeId'] = $paymentDisputeId;

        return $this;
    }

    /**
     * Gets paymentDisputeStatus
     *
     * @return string|null
     */
    public function getPaymentDisputeStatus()
    {
        return $this->container['paymentDisputeStatus'];
    }

    /**
     * Sets paymentDisputeStatus
     *
     * @param string|null $paymentDisputeStatus The enumeration value in this field gives the current status of the payment dispute. The status of a payment dispute partially determines other fields that are returned in the response. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/DisputeStateEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPaymentDisputeStatus($paymentDisputeStatus)
    {
        $this->container['paymentDisputeStatus'] = $paymentDisputeStatus;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See DisputeReasonEnum type for a description of the supported reasons that buyers can give for initiating a payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/DisputeReasonEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId This is the unique identifier of the order involved in the payment dispute. Note: eBay rolled out a new Order ID format in June 2019. The legacy APIs still support the old and new order ID format to identify orders, but only the new order ID format is returned in REST-based API responses.
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets openDate
     *
     * @return string|null
     */
    public function getOpenDate()
    {
        return $this->container['openDate'];
    }

    /**
     * Sets openDate
     *
     * @param string|null $openDate The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return $this
     */
    public function setOpenDate($openDate)
    {
        $this->container['openDate'] = $openDate;

        return $this;
    }

    /**
     * Gets closedDate
     *
     * @return string|null
     */
    public function getClosedDate()
    {
        return $this->container['closedDate'];
    }

    /**
     * Sets closedDate
     *
     * @param string|null $closedDate The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the CLOSED state. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return $this
     */
    public function setClosedDate($closedDate)
    {
        $this->container['closedDate'] = $closedDate;

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
     * @param string|null $respondByDate The timestamp in this field shows the date/time when the seller must respond to a payment dispute, so this field is only returned for payment disputes in the ACTION_NEEDED state. For payment disputes that currently require action by the seller, that same seller should look at the availableChoices array to see the available actions. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
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
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\OrderLineItems[]|null $lineItems This array is used to identify one or more order line items associated with the payment dispute.
     *
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\SimpleAmount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\SimpleAmount|null $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\PaymentDisputeOutcomeDetail|null
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\PaymentDisputeOutcomeDetail|null $resolution resolution
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets returnAddress
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\Address|null
     */
    public function getReturnAddress()
    {
        return $this->container['returnAddress'];
    }

    /**
     * Sets returnAddress
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\Address|null $returnAddress returnAddress
     *
     * @return $this
     */
    public function setReturnAddress($returnAddress)
    {
        $this->container['returnAddress'] = $returnAddress;

        return $this;
    }

    /**
     * Gets sellerResponse
     *
     * @return string|null
     */
    public function getSellerResponse()
    {
        return $this->container['sellerResponse'];
    }

    /**
     * Sets sellerResponse
     *
     * @param string|null $sellerResponse The enumeration value returned in this field indicates how the seller has responded to the payment dispute. The seller has the option of accepting the payment dispute and agreeing to issue a refund, accepting the payment dispute, agreeing to issue a refund, and requesting that the buyer return the item, or contesting the payment dispute. If the seller has yet to make a decision on the payment dispute, the enumeration value returned in this field will be SELLER_RESPONSE_OVERDUE. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/SellerResponseEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setSellerResponse($sellerResponse)
    {
        $this->container['sellerResponse'] = $sellerResponse;

        return $this;
    }

    /**
     * Gets availableChoices
     *
     * @return string[]|null
     */
    public function getAvailableChoices()
    {
        return $this->container['availableChoices'];
    }

    /**
     * Sets availableChoices
     *
     * @param string[]|null $availableChoices The value(s) returned in this array indicate the choices that the seller has when responding to the payment dispute. Once the seller has responded to the payment dispute, this field will no longer be shown, and instead, the sellerResponse field will show the decision that the seller made.
     *
     * @return $this
     */
    public function setAvailableChoices($availableChoices)
    {
        $this->container['availableChoices'] = $availableChoices;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int|null
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int|null $revision This integer value indicates the revision number of the payment dispute. Each time an action is taken against a payment dispute, this integer value increases by 1.
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets evidence
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\DisputeEvidence[]|null
     */
    public function getEvidence()
    {
        return $this->container['evidence'];
    }

    /**
     * Sets evidence
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\DisputeEvidence[]|null $evidence This container shows any evidence that has been provided by the seller to contest the payment dispute. Evidence may include shipment tracking information, proof of authentication documentation, image(s) to proof that an item is as described, or financial documentation/invoice. This container is only returned if the seller has provided at least one document used as evidence against the payment dispute.
     *
     * @return $this
     */
    public function setEvidence($evidence)
    {
        $this->container['evidence'] = $evidence;

        return $this;
    }

    /**
     * Gets evidenceRequests
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\EvidenceRequest[]|null
     */
    public function getEvidenceRequests()
    {
        return $this->container['evidenceRequests'];
    }

    /**
     * Sets evidenceRequests
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\EvidenceRequest[]|null $evidenceRequests This container is returned if one or more evidence documents are being requested from the seller.
     *
     * @return $this
     */
    public function setEvidenceRequests($evidenceRequests)
    {
        $this->container['evidenceRequests'] = $evidenceRequests;

        return $this;
    }

    /**
     * Gets buyerProvided
     *
     * @return \macropage\SDKs\ebay\rest\fulfillment\Model\InfoFromBuyer|null
     */
    public function getBuyerProvided()
    {
        return $this->container['buyerProvided'];
    }

    /**
     * Sets buyerProvided
     *
     * @param \macropage\SDKs\ebay\rest\fulfillment\Model\InfoFromBuyer|null $buyerProvided buyerProvided
     *
     * @return $this
     */
    public function setBuyerProvided($buyerProvided)
    {
        $this->container['buyerProvided'] = $buyerProvided;

        return $this;
    }

    /**
     * Gets buyerUsername
     *
     * @return string|null
     */
    public function getBuyerUsername()
    {
        return $this->container['buyerUsername'];
    }

    /**
     * Sets buyerUsername
     *
     * @param string|null $buyerUsername This is the eBay user ID of the buyer that initiated the payment dispute.
     *
     * @return $this
     */
    public function setBuyerUsername($buyerUsername)
    {
        $this->container['buyerUsername'] = $buyerUsername;

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

