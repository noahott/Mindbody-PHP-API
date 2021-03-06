<?php
/**
 * GetClientVisitsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MINDBODY Public API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.6
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
 * GetClientVisitsRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetClientVisitsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetClientVisitsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'client_associated_sites_offset' => 'int',
        'cross_regional_lookup' => 'bool',
        'end_date' => '\DateTime',
        'start_date' => '\DateTime',
        'unpaids_only' => 'bool',
        'limit' => 'int',
        'offset' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_id' => null,
        'client_associated_sites_offset' => 'int32',
        'cross_regional_lookup' => null,
        'end_date' => 'date-time',
        'start_date' => 'date-time',
        'unpaids_only' => null,
        'limit' => 'int32',
        'offset' => 'int32'
    ];

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
        'client_id' => 'ClientId',
        'client_associated_sites_offset' => 'ClientAssociatedSitesOffset',
        'cross_regional_lookup' => 'CrossRegionalLookup',
        'end_date' => 'EndDate',
        'start_date' => 'StartDate',
        'unpaids_only' => 'UnpaidsOnly',
        'limit' => 'Limit',
        'offset' => 'Offset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'client_associated_sites_offset' => 'setClientAssociatedSitesOffset',
        'cross_regional_lookup' => 'setCrossRegionalLookup',
        'end_date' => 'setEndDate',
        'start_date' => 'setStartDate',
        'unpaids_only' => 'setUnpaidsOnly',
        'limit' => 'setLimit',
        'offset' => 'setOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'client_associated_sites_offset' => 'getClientAssociatedSitesOffset',
        'cross_regional_lookup' => 'getCrossRegionalLookup',
        'end_date' => 'getEndDate',
        'start_date' => 'getStartDate',
        'unpaids_only' => 'getUnpaidsOnly',
        'limit' => 'getLimit',
        'offset' => 'getOffset'
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_associated_sites_offset'] = isset($data['client_associated_sites_offset']) ? $data['client_associated_sites_offset'] : null;
        $this->container['cross_regional_lookup'] = isset($data['cross_regional_lookup']) ? $data['cross_regional_lookup'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['unpaids_only'] = isset($data['unpaids_only']) ? $data['unpaids_only'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
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
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id The ID of the requested client.
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_associated_sites_offset
     *
     * @return int
     */
    public function getClientAssociatedSitesOffset()
    {
        return $this->container['client_associated_sites_offset'];
    }

    /**
     * Sets client_associated_sites_offset
     *
     * @param int $client_associated_sites_offset The number of sites to skip when returning the site associated with a client.
     *
     * @return $this
     */
    public function setClientAssociatedSitesOffset($client_associated_sites_offset)
    {
        $this->container['client_associated_sites_offset'] = $client_associated_sites_offset;

        return $this;
    }

    /**
     * Gets cross_regional_lookup
     *
     * @return bool
     */
    public function getCrossRegionalLookup()
    {
        return $this->container['cross_regional_lookup'];
    }

    /**
     * Sets cross_regional_lookup
     *
     * @param bool $cross_regional_lookup When `true`, indicates that past and scheduled client visits across all sites in the region are returned.<br />  When `false`, indicates that only visits at the current site are returned.
     *
     * @return $this
     */
    public function setCrossRegionalLookup($cross_regional_lookup)
    {
        $this->container['cross_regional_lookup'] = $cross_regional_lookup;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date The date past which class visits are not returned.  Default: **today’s date**
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The date before which class visits are not returned.  Default: **the end date**
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets unpaids_only
     *
     * @return bool
     */
    public function getUnpaidsOnly()
    {
        return $this->container['unpaids_only'];
    }

    /**
     * Sets unpaids_only
     *
     * @param bool $unpaids_only When `true`, indicates that only visits that have not been paid for are returned.<br />  When `false`, indicates that all visits are returned, regardless of whether they have been paid for.<br />  Default: **false**
     *
     * @return $this
     */
    public function setUnpaidsOnly($unpaids_only)
    {
        $this->container['unpaids_only'] = $unpaids_only;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit Number of results to include, defaults to 100
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset Page offset, defaults to 0.
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

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


