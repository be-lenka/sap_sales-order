<?php
/**
 * APISALESORDERSRVASalesOrderItemRelatedObjectTypeUpdate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\SalesOrder
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sales Order (A2X)
 *
 * In every API call, you can make use of the following operations:   - You can read entire sales orders or only parts of the data, using the provided filters.   - You can create sales orders. You can use deep insert requests, that is, you create a header plus at least one of the following entities: header partner, header partner address, header pricing element, header billing plan, header billing plan item, header text, payment plan, header related object, item, item partner, item partner address, item pricing element, item billing plan, item billing plan item, item text, and item related object.   If the header already exists, you can create the following sub-entities on their own: header partner, header pricing element, header text, payment plan, header related object, item partner, item pricing element, item text, and item related object.   - For existing sales orders, you can create new items. You can use deep insert requests, that is, you create an item plus at least one of the following entities: item partner, item partner address, item pricing element, item billing plan, item billing plan item, item text, and item related object. If the item already exists, you can create the following sub-entities on their own: item partner, item pricing element, item text, item related object, and item schedule line.   - For existing sales orders, you can update the following entities (that is, you can change the content of their properties): header, header partner, header partner address, header pricing element, header billing plan, header billing plan item, header text, payment plan, item, item partner, item partner address, item pricing element, item billing plan, item billing plan item, item text, and item schedule line.   - For existing sales orders, you can delete the following entities: header, header partner, header pricing element, header billing plan item, header text, payment plan, header related object, item, item partner, item pricing element, item billing plan item, item text, item related object, and item schedule line.   - You can accept or deny approval requests for sales orders that cannot be processed without the consent of an approver.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\SalesOrder\Model;

use \ArrayAccess;
use \BeLenka\SAP\SalesOrder\ObjectSerializer;

/**
 * APISALESORDERSRVASalesOrderItemRelatedObjectTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\SalesOrder
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APISALESORDERSRVASalesOrderItemRelatedObjectTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_SALES_ORDER_SRV.A_SalesOrderItemRelatedObjectType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sd_document_related_object_type' => 'string',
        'sd_doc_related_object_system' => 'string',
        'sd_doc_related_object_reference1' => 'string',
        'sd_doc_related_object_reference2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sd_document_related_object_type' => null,
        'sd_doc_related_object_system' => null,
        'sd_doc_related_object_reference1' => null,
        'sd_doc_related_object_reference2' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sd_document_related_object_type' => true,
		'sd_doc_related_object_system' => true,
		'sd_doc_related_object_reference1' => true,
		'sd_doc_related_object_reference2' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sd_document_related_object_type' => 'SDDocumentRelatedObjectType',
        'sd_doc_related_object_system' => 'SDDocRelatedObjectSystem',
        'sd_doc_related_object_reference1' => 'SDDocRelatedObjectReference1',
        'sd_doc_related_object_reference2' => 'SDDocRelatedObjectReference2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sd_document_related_object_type' => 'setSdDocumentRelatedObjectType',
        'sd_doc_related_object_system' => 'setSdDocRelatedObjectSystem',
        'sd_doc_related_object_reference1' => 'setSdDocRelatedObjectReference1',
        'sd_doc_related_object_reference2' => 'setSdDocRelatedObjectReference2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sd_document_related_object_type' => 'getSdDocumentRelatedObjectType',
        'sd_doc_related_object_system' => 'getSdDocRelatedObjectSystem',
        'sd_doc_related_object_reference1' => 'getSdDocRelatedObjectReference1',
        'sd_doc_related_object_reference2' => 'getSdDocRelatedObjectReference2'
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
        $this->setIfExists('sd_document_related_object_type', $data ?? [], null);
        $this->setIfExists('sd_doc_related_object_system', $data ?? [], null);
        $this->setIfExists('sd_doc_related_object_reference1', $data ?? [], null);
        $this->setIfExists('sd_doc_related_object_reference2', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sd_document_related_object_type']) && (mb_strlen($this->container['sd_document_related_object_type']) > 5)) {
            $invalidProperties[] = "invalid value for 'sd_document_related_object_type', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['sd_doc_related_object_system']) && (mb_strlen($this->container['sd_doc_related_object_system']) > 60)) {
            $invalidProperties[] = "invalid value for 'sd_doc_related_object_system', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['sd_doc_related_object_reference1']) && (mb_strlen($this->container['sd_doc_related_object_reference1']) > 60)) {
            $invalidProperties[] = "invalid value for 'sd_doc_related_object_reference1', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['sd_doc_related_object_reference2']) && (mb_strlen($this->container['sd_doc_related_object_reference2']) > 60)) {
            $invalidProperties[] = "invalid value for 'sd_doc_related_object_reference2', the character length must be smaller than or equal to 60.";
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
     * Gets sd_document_related_object_type
     *
     * @return string|null
     */
    public function getSdDocumentRelatedObjectType()
    {
        return $this->container['sd_document_related_object_type'];
    }

    /**
     * Sets sd_document_related_object_type
     *
     * @param string|null $sd_document_related_object_type Type of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocumentRelatedObjectType($sd_document_related_object_type)
    {
        if (is_null($sd_document_related_object_type)) {
            array_push($this->openAPINullablesSetToNull, 'sd_document_related_object_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sd_document_related_object_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($sd_document_related_object_type) && (mb_strlen($sd_document_related_object_type) > 5)) {
            throw new \InvalidArgumentException('invalid length for $sd_document_related_object_type when calling APISALESORDERSRVASalesOrderItemRelatedObjectTypeUpdate., must be smaller than or equal to 5.');
        }

        $this->container['sd_document_related_object_type'] = $sd_document_related_object_type;

        return $this;
    }

    /**
     * Gets sd_doc_related_object_system
     *
     * @return string|null
     */
    public function getSdDocRelatedObjectSystem()
    {
        return $this->container['sd_doc_related_object_system'];
    }

    /**
     * Sets sd_doc_related_object_system
     *
     * @param string|null $sd_doc_related_object_system System of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocRelatedObjectSystem($sd_doc_related_object_system)
    {
        if (is_null($sd_doc_related_object_system)) {
            array_push($this->openAPINullablesSetToNull, 'sd_doc_related_object_system');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sd_doc_related_object_system', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($sd_doc_related_object_system) && (mb_strlen($sd_doc_related_object_system) > 60)) {
            throw new \InvalidArgumentException('invalid length for $sd_doc_related_object_system when calling APISALESORDERSRVASalesOrderItemRelatedObjectTypeUpdate., must be smaller than or equal to 60.');
        }

        $this->container['sd_doc_related_object_system'] = $sd_doc_related_object_system;

        return $this;
    }

    /**
     * Gets sd_doc_related_object_reference1
     *
     * @return string|null
     */
    public function getSdDocRelatedObjectReference1()
    {
        return $this->container['sd_doc_related_object_reference1'];
    }

    /**
     * Sets sd_doc_related_object_reference1
     *
     * @param string|null $sd_doc_related_object_reference1 Reference of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocRelatedObjectReference1($sd_doc_related_object_reference1)
    {
        if (is_null($sd_doc_related_object_reference1)) {
            array_push($this->openAPINullablesSetToNull, 'sd_doc_related_object_reference1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sd_doc_related_object_reference1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($sd_doc_related_object_reference1) && (mb_strlen($sd_doc_related_object_reference1) > 60)) {
            throw new \InvalidArgumentException('invalid length for $sd_doc_related_object_reference1 when calling APISALESORDERSRVASalesOrderItemRelatedObjectTypeUpdate., must be smaller than or equal to 60.');
        }

        $this->container['sd_doc_related_object_reference1'] = $sd_doc_related_object_reference1;

        return $this;
    }

    /**
     * Gets sd_doc_related_object_reference2
     *
     * @return string|null
     */
    public function getSdDocRelatedObjectReference2()
    {
        return $this->container['sd_doc_related_object_reference2'];
    }

    /**
     * Sets sd_doc_related_object_reference2
     *
     * @param string|null $sd_doc_related_object_reference2 Reference of the Related Object of an SD Document
     *
     * @return self
     */
    public function setSdDocRelatedObjectReference2($sd_doc_related_object_reference2)
    {
        if (is_null($sd_doc_related_object_reference2)) {
            array_push($this->openAPINullablesSetToNull, 'sd_doc_related_object_reference2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sd_doc_related_object_reference2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($sd_doc_related_object_reference2) && (mb_strlen($sd_doc_related_object_reference2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $sd_doc_related_object_reference2 when calling APISALESORDERSRVASalesOrderItemRelatedObjectTypeUpdate., must be smaller than or equal to 60.');
        }

        $this->container['sd_doc_related_object_reference2'] = $sd_doc_related_object_reference2;

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


