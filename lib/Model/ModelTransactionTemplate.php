<?php
/**
 * ModelTransactionTemplate
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  TripartieWebAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Tripartie Web API
 *
 * This document describes all use cases offered by the Tripartie Web API.<br /><br /> The Tripartie Web API allows you to easily create Transaction templates.<br /> A Transaction template allows a User (the Buyer) to safely initiate a Transaction pre-configured by another User (the Seller).<br /> This allows you to add a Secured Payment button on your website pages.<br /><br /> To facilitate working with the Web API, we built libraries for common development environment:<br/> <ul class=\"bullet\">   <li><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://github.com/tripartie/webapi-jsclient\">Javascript</a></li> </ul> <br/> You're reading the documentation for version 1.0 of the Web API.<br/> Go to version <select id=\"version-switcher\"></select>
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@tripartie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TripartieWebAPI\Model;

use \ArrayAccess;
use \TripartieWebAPI\ObjectSerializer;

/**
 * ModelTransactionTemplate Class Doc Comment
 *
 * @category Class
 * @package  TripartieWebAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ModelTransactionTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Model_TransactionTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'permalink' => 'string',
        'title' => 'string',
        'description' => 'string',
        'externalId' => 'string',
        'sellerExternalId' => 'string',
        'sellerTripartieId' => 'string',
        'subTotal' => 'int',
        'currency' => 'string',
        'flow' => 'string',
        'buyerFees' => 'int',
        'shippingCosts' => 'int',
        'buyerTotal' => 'int',
        'sellerFees' => 'int',
        'sellerTotal' => 'int',
        'adUrl' => 'string',
        'allowPriceChange' => 'bool',
        'allowInPerson' => 'bool',
        'allowDelivery' => 'bool',
        'hasPicture' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'permalink' => null,
        'title' => null,
        'description' => null,
        'externalId' => null,
        'sellerExternalId' => null,
        'sellerTripartieId' => null,
        'subTotal' => null,
        'currency' => null,
        'flow' => null,
        'buyerFees' => null,
        'shippingCosts' => null,
        'buyerTotal' => null,
        'sellerFees' => null,
        'sellerTotal' => null,
        'adUrl' => null,
        'allowPriceChange' => null,
        'allowInPerson' => null,
        'allowDelivery' => null,
        'hasPicture' => null
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
        'id' => 'id',
        'permalink' => 'permalink',
        'title' => 'title',
        'description' => 'description',
        'externalId' => 'externalId',
        'sellerExternalId' => 'sellerExternalId',
        'sellerTripartieId' => 'sellerTripartieId',
        'subTotal' => 'subTotal',
        'currency' => 'currency',
        'flow' => 'flow',
        'buyerFees' => 'buyerFees',
        'shippingCosts' => 'shippingCosts',
        'buyerTotal' => 'buyerTotal',
        'sellerFees' => 'sellerFees',
        'sellerTotal' => 'sellerTotal',
        'adUrl' => 'adUrl',
        'allowPriceChange' => 'allowPriceChange',
        'allowInPerson' => 'allowInPerson',
        'allowDelivery' => 'allowDelivery',
        'hasPicture' => 'hasPicture'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'permalink' => 'setPermalink',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'externalId' => 'setExternalId',
        'sellerExternalId' => 'setSellerExternalId',
        'sellerTripartieId' => 'setSellerTripartieId',
        'subTotal' => 'setSubTotal',
        'currency' => 'setCurrency',
        'flow' => 'setFlow',
        'buyerFees' => 'setBuyerFees',
        'shippingCosts' => 'setShippingCosts',
        'buyerTotal' => 'setBuyerTotal',
        'sellerFees' => 'setSellerFees',
        'sellerTotal' => 'setSellerTotal',
        'adUrl' => 'setAdUrl',
        'allowPriceChange' => 'setAllowPriceChange',
        'allowInPerson' => 'setAllowInPerson',
        'allowDelivery' => 'setAllowDelivery',
        'hasPicture' => 'setHasPicture'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'permalink' => 'getPermalink',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'externalId' => 'getExternalId',
        'sellerExternalId' => 'getSellerExternalId',
        'sellerTripartieId' => 'getSellerTripartieId',
        'subTotal' => 'getSubTotal',
        'currency' => 'getCurrency',
        'flow' => 'getFlow',
        'buyerFees' => 'getBuyerFees',
        'shippingCosts' => 'getShippingCosts',
        'buyerTotal' => 'getBuyerTotal',
        'sellerFees' => 'getSellerFees',
        'sellerTotal' => 'getSellerTotal',
        'adUrl' => 'getAdUrl',
        'allowPriceChange' => 'getAllowPriceChange',
        'allowInPerson' => 'getAllowInPerson',
        'allowDelivery' => 'getAllowDelivery',
        'hasPicture' => 'getHasPicture'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['permalink'] = $data['permalink'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['externalId'] = $data['externalId'] ?? null;
        $this->container['sellerExternalId'] = $data['sellerExternalId'] ?? null;
        $this->container['sellerTripartieId'] = $data['sellerTripartieId'] ?? null;
        $this->container['subTotal'] = $data['subTotal'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['flow'] = $data['flow'] ?? null;
        $this->container['buyerFees'] = $data['buyerFees'] ?? null;
        $this->container['shippingCosts'] = $data['shippingCosts'] ?? null;
        $this->container['buyerTotal'] = $data['buyerTotal'] ?? null;
        $this->container['sellerFees'] = $data['sellerFees'] ?? null;
        $this->container['sellerTotal'] = $data['sellerTotal'] ?? null;
        $this->container['adUrl'] = $data['adUrl'] ?? null;
        $this->container['allowPriceChange'] = $data['allowPriceChange'] ?? null;
        $this->container['allowInPerson'] = $data['allowInPerson'] ?? true;
        $this->container['allowDelivery'] = $data['allowDelivery'] ?? true;
        $this->container['hasPicture'] = $data['hasPicture'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The Transaction template's Tripartie ID.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets permalink
     *
     * @return string|null
     */
    public function getPermalink()
    {
        return $this->container['permalink'];
    }

    /**
     * Sets permalink
     *
     * @param string|null $permalink The template permalink. <strong>This is what you need for the Secured Payment button.</strong>
     *
     * @return self
     */
    public function setPermalink($permalink)
    {
        $this->container['permalink'] = $permalink;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string|null $externalId The Transaction template's External ID.
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets sellerExternalId
     *
     * @return string|null
     */
    public function getSellerExternalId()
    {
        return $this->container['sellerExternalId'];
    }

    /**
     * Sets sellerExternalId
     *
     * @param string|null $sellerExternalId The Seller's External ID.
     *
     * @return self
     */
    public function setSellerExternalId($sellerExternalId)
    {
        $this->container['sellerExternalId'] = $sellerExternalId;

        return $this;
    }

    /**
     * Gets sellerTripartieId
     *
     * @return string|null
     */
    public function getSellerTripartieId()
    {
        return $this->container['sellerTripartieId'];
    }

    /**
     * Sets sellerTripartieId
     *
     * @param string|null $sellerTripartieId The Seller's Tripartie ID.
     *
     * @return self
     */
    public function setSellerTripartieId($sellerTripartieId)
    {
        $this->container['sellerTripartieId'] = $sellerTripartieId;

        return $this;
    }

    /**
     * Gets subTotal
     *
     * @return int|null
     */
    public function getSubTotal()
    {
        return $this->container['subTotal'];
    }

    /**
     * Sets subTotal
     *
     * @param int|null $subTotal The price, in cents.
     *
     * @return self
     */
    public function setSubTotal($subTotal)
    {
        $this->container['subTotal'] = $subTotal;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency code (ISO 4217).
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets flow
     *
     * @return string|null
     */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
     * Sets flow
     *
     * @param string|null $flow The flow.
     *
     * @return self
     */
    public function setFlow($flow)
    {
        $this->container['flow'] = $flow;

        return $this;
    }

    /**
     * Gets buyerFees
     *
     * @return int|null
     */
    public function getBuyerFees()
    {
        return $this->container['buyerFees'];
    }

    /**
     * Sets buyerFees
     *
     * @param int|null $buyerFees The buyer's fees, in cents.
     *
     * @return self
     */
    public function setBuyerFees($buyerFees)
    {
        $this->container['buyerFees'] = $buyerFees;

        return $this;
    }

    /**
     * Gets shippingCosts
     *
     * @return int|null
     */
    public function getShippingCosts()
    {
        return $this->container['shippingCosts'];
    }

    /**
     * Sets shippingCosts
     *
     * @param int|null $shippingCosts The shipping costs, in cents.
     *
     * @return self
     */
    public function setShippingCosts($shippingCosts)
    {
        $this->container['shippingCosts'] = $shippingCosts;

        return $this;
    }

    /**
     * Gets buyerTotal
     *
     * @return int|null
     */
    public function getBuyerTotal()
    {
        return $this->container['buyerTotal'];
    }

    /**
     * Sets buyerTotal
     *
     * @param int|null $buyerTotal The buyer's total, in cents.
     *
     * @return self
     */
    public function setBuyerTotal($buyerTotal)
    {
        $this->container['buyerTotal'] = $buyerTotal;

        return $this;
    }

    /**
     * Gets sellerFees
     *
     * @return int|null
     */
    public function getSellerFees()
    {
        return $this->container['sellerFees'];
    }

    /**
     * Sets sellerFees
     *
     * @param int|null $sellerFees The seller's fees, in cents.
     *
     * @return self
     */
    public function setSellerFees($sellerFees)
    {
        $this->container['sellerFees'] = $sellerFees;

        return $this;
    }

    /**
     * Gets sellerTotal
     *
     * @return int|null
     */
    public function getSellerTotal()
    {
        return $this->container['sellerTotal'];
    }

    /**
     * Sets sellerTotal
     *
     * @param int|null $sellerTotal The seller's total, in cents.
     *
     * @return self
     */
    public function setSellerTotal($sellerTotal)
    {
        $this->container['sellerTotal'] = $sellerTotal;

        return $this;
    }

    /**
     * Gets adUrl
     *
     * @return string|null
     */
    public function getAdUrl()
    {
        return $this->container['adUrl'];
    }

    /**
     * Sets adUrl
     *
     * @param string|null $adUrl The original Ad's URL.
     *
     * @return self
     */
    public function setAdUrl($adUrl)
    {
        $this->container['adUrl'] = $adUrl;

        return $this;
    }

    /**
     * Gets allowPriceChange
     *
     * @return bool|null
     */
    public function getAllowPriceChange()
    {
        return $this->container['allowPriceChange'];
    }

    /**
     * Sets allowPriceChange
     *
     * @param bool|null $allowPriceChange Allow price negociation?
     *
     * @return self
     */
    public function setAllowPriceChange($allowPriceChange)
    {
        $this->container['allowPriceChange'] = $allowPriceChange;

        return $this;
    }

    /**
     * Gets allowInPerson
     *
     * @return bool|null
     */
    public function getAllowInPerson()
    {
        return $this->container['allowInPerson'];
    }

    /**
     * Sets allowInPerson
     *
     * @param bool|null $allowInPerson Allow hand-over?
     *
     * @return self
     */
    public function setAllowInPerson($allowInPerson)
    {
        $this->container['allowInPerson'] = $allowInPerson;

        return $this;
    }

    /**
     * Gets allowDelivery
     *
     * @return bool|null
     */
    public function getAllowDelivery()
    {
        return $this->container['allowDelivery'];
    }

    /**
     * Sets allowDelivery
     *
     * @param bool|null $allowDelivery Allow delivery?
     *
     * @return self
     */
    public function setAllowDelivery($allowDelivery)
    {
        $this->container['allowDelivery'] = $allowDelivery;

        return $this;
    }

    /**
     * Gets hasPicture
     *
     * @return bool|null
     */
    public function getHasPicture()
    {
        return $this->container['hasPicture'];
    }

    /**
     * Sets hasPicture
     *
     * @param bool|null $hasPicture Has a picture?
     *
     * @return self
     */
    public function setHasPicture($hasPicture)
    {
        $this->container['hasPicture'] = $hasPicture;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


