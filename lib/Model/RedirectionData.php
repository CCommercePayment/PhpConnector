<?php
/**
 * RedirectionData
 *
 * PHP version 5
 *
 * @category Class
 * @package  pachirapay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace pachirapay\Model;

use \ArrayAccess;
use \pachirapay\ObjectSerializer;

/**
 * RedirectionData Class Doc Comment
 *
 * @category Class
 * @package  pachirapay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RedirectionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RedirectionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redirection_url' => 'string',
        'params' => 'map[string,string]',
        'redirection_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'redirection_url' => null,
        'params' => null,
        'redirection_type' => null
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
        'redirection_url' => 'redirectionUrl',
        'params' => 'params',
        'redirection_type' => 'redirectionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redirection_url' => 'setRedirectionUrl',
        'params' => 'setParams',
        'redirection_type' => 'setRedirectionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redirection_url' => 'getRedirectionUrl',
        'params' => 'getParams',
        'redirection_type' => 'getRedirectionType'
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

    const REDIRECTION_TYPE_UNKNOWN = 'unknown';
    const REDIRECTION_TYPE_GET = 'get';
    const REDIRECTION_TYPE_POST = 'post';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedirectionTypeAllowableValues()
    {
        return [
            self::REDIRECTION_TYPE_UNKNOWN,
            self::REDIRECTION_TYPE_GET,
            self::REDIRECTION_TYPE_POST,
        ];
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
        $this->container['redirection_url'] = isset($data['redirection_url']) ? $data['redirection_url'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['redirection_type'] = isset($data['redirection_type']) ? $data['redirection_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRedirectionTypeAllowableValues();
        if (!is_null($this->container['redirection_type']) && !in_array($this->container['redirection_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'redirection_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets redirection_url
     *
     * @return string|null
     */
    public function getRedirectionUrl()
    {
        return $this->container['redirection_url'];
    }

    /**
     * Sets redirection_url
     *
     * @param string|null $redirection_url redirection_url
     *
     * @return $this
     */
    public function setRedirectionUrl($redirection_url)
    {
        $this->container['redirection_url'] = $redirection_url;

        return $this;
    }

    /**
     * Gets params
     *
     * @return map[string,string]|null
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param map[string,string]|null $params params
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets redirection_type
     *
     * @return string|null
     */
    public function getRedirectionType()
    {
        return $this->container['redirection_type'];
    }

    /**
     * Sets redirection_type
     *
     * @param string|null $redirection_type redirection_type
     *
     * @return $this
     */
    public function setRedirectionType($redirection_type)
    {
        $allowedValues = $this->getRedirectionTypeAllowableValues();
        if (!is_null($redirection_type) && !in_array($redirection_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'redirection_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redirection_type'] = $redirection_type;

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


