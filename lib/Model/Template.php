<?php
/**
 * Template
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Mediamask
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mediamask API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Mediamask\Model;

use \ArrayAccess;
use \Mediamask\ObjectSerializer;

/**
 * Template Class Doc Comment
 *
 * @category Class
 * @package  Mediamask
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Template implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Template';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'project_id' => 'string',
        'url_api' => 'bool',
        'signed_url_api' => 'bool',
        'rest_api' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'dynamic_layers' => '\Mediamask\Model\DynamicLayer[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'project_id' => 'uuid',
        'url_api' => null,
        'signed_url_api' => null,
        'rest_api' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'dynamic_layers' => null
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
        'name' => 'name',
        'project_id' => 'project_id',
        'url_api' => 'url_api',
        'signed_url_api' => 'signed_url_api',
        'rest_api' => 'rest_api',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'dynamic_layers' => 'dynamic_layers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'project_id' => 'setProjectId',
        'url_api' => 'setUrlApi',
        'signed_url_api' => 'setSignedUrlApi',
        'rest_api' => 'setRestApi',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'dynamic_layers' => 'setDynamicLayers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'project_id' => 'getProjectId',
        'url_api' => 'getUrlApi',
        'signed_url_api' => 'getSignedUrlApi',
        'rest_api' => 'getRestApi',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'dynamic_layers' => 'getDynamicLayers'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['project_id'] = $data['project_id'] ?? null;
        $this->container['url_api'] = $data['url_api'] ?? null;
        $this->container['signed_url_api'] = $data['signed_url_api'] ?? null;
        $this->container['rest_api'] = $data['rest_api'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['dynamic_layers'] = $data['dynamic_layers'] ?? null;
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The template id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The template name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id The id of the project the template belongs to
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets url_api
     *
     * @return bool|null
     */
    public function getUrlApi()
    {
        return $this->container['url_api'];
    }

    /**
     * Sets url_api
     *
     * @param bool|null $url_api True if the URL API is enabled for the template
     *
     * @return self
     */
    public function setUrlApi($url_api)
    {
        $this->container['url_api'] = $url_api;

        return $this;
    }

    /**
     * Gets signed_url_api
     *
     * @return bool|null
     */
    public function getSignedUrlApi()
    {
        return $this->container['signed_url_api'];
    }

    /**
     * Sets signed_url_api
     *
     * @param bool|null $signed_url_api True if Signed URL API is enabled for the template
     *
     * @return self
     */
    public function setSignedUrlApi($signed_url_api)
    {
        $this->container['signed_url_api'] = $signed_url_api;

        return $this;
    }

    /**
     * Gets rest_api
     *
     * @return bool|null
     */
    public function getRestApi()
    {
        return $this->container['rest_api'];
    }

    /**
     * Sets rest_api
     *
     * @param bool|null $rest_api True if REST API is enabled for the template
     *
     * @return self
     */
    public function setRestApi($rest_api)
    {
        $this->container['rest_api'] = $rest_api;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp when the template was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Timestamp when the template was last updated
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets dynamic_layers
     *
     * @return \Mediamask\Model\DynamicLayer[]|null
     */
    public function getDynamicLayers()
    {
        return $this->container['dynamic_layers'];
    }

    /**
     * Sets dynamic_layers
     *
     * @param \Mediamask\Model\DynamicLayer[]|null $dynamic_layers dynamic_layers
     *
     * @return self
     */
    public function setDynamicLayers($dynamic_layers)
    {
        $this->container['dynamic_layers'] = $dynamic_layers;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

