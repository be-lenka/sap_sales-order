<?php
/**
 * APISALESORDERSRVASalesOrderPrecdgProcFlowTypeUpdate
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
 * APISALESORDERSRVASalesOrderPrecdgProcFlowTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\SalesOrder
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APISALESORDERSRVASalesOrderPrecdgProcFlowTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_SALES_ORDER_SRV.A_SalesOrderPrecdgProcFlowType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'preceding_document' => 'string',
        'preceding_document_category' => 'string',
        'process_flow_level' => 'string',
        'overall_sd_process_status' => 'string',
        'creation_date' => 'string',
        'creation_time' => 'string',
        'last_change_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'preceding_document' => null,
        'preceding_document_category' => null,
        'process_flow_level' => null,
        'overall_sd_process_status' => null,
        'creation_date' => null,
        'creation_time' => null,
        'last_change_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'preceding_document' => true,
		'preceding_document_category' => true,
		'process_flow_level' => true,
		'overall_sd_process_status' => true,
		'creation_date' => true,
		'creation_time' => true,
		'last_change_date' => true
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
        'preceding_document' => 'PrecedingDocument',
        'preceding_document_category' => 'PrecedingDocumentCategory',
        'process_flow_level' => 'ProcessFlowLevel',
        'overall_sd_process_status' => 'OverallSDProcessStatus',
        'creation_date' => 'CreationDate',
        'creation_time' => 'CreationTime',
        'last_change_date' => 'LastChangeDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preceding_document' => 'setPrecedingDocument',
        'preceding_document_category' => 'setPrecedingDocumentCategory',
        'process_flow_level' => 'setProcessFlowLevel',
        'overall_sd_process_status' => 'setOverallSdProcessStatus',
        'creation_date' => 'setCreationDate',
        'creation_time' => 'setCreationTime',
        'last_change_date' => 'setLastChangeDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preceding_document' => 'getPrecedingDocument',
        'preceding_document_category' => 'getPrecedingDocumentCategory',
        'process_flow_level' => 'getProcessFlowLevel',
        'overall_sd_process_status' => 'getOverallSdProcessStatus',
        'creation_date' => 'getCreationDate',
        'creation_time' => 'getCreationTime',
        'last_change_date' => 'getLastChangeDate'
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
        $this->setIfExists('preceding_document', $data ?? [], null);
        $this->setIfExists('preceding_document_category', $data ?? [], null);
        $this->setIfExists('process_flow_level', $data ?? [], null);
        $this->setIfExists('overall_sd_process_status', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('creation_time', $data ?? [], null);
        $this->setIfExists('last_change_date', $data ?? [], null);
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

        if (!is_null($this->container['preceding_document']) && (mb_strlen($this->container['preceding_document']) > 10)) {
            $invalidProperties[] = "invalid value for 'preceding_document', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['preceding_document_category']) && (mb_strlen($this->container['preceding_document_category']) > 4)) {
            $invalidProperties[] = "invalid value for 'preceding_document_category', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['process_flow_level']) && (mb_strlen($this->container['process_flow_level']) > 2)) {
            $invalidProperties[] = "invalid value for 'process_flow_level', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['overall_sd_process_status']) && (mb_strlen($this->container['overall_sd_process_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'overall_sd_process_status', the character length must be smaller than or equal to 1.";
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
     * Gets preceding_document
     *
     * @return string|null
     */
    public function getPrecedingDocument()
    {
        return $this->container['preceding_document'];
    }

    /**
     * Sets preceding_document
     *
     * @param string|null $preceding_document Preceding sales and distribution document
     *
     * @return self
     */
    public function setPrecedingDocument($preceding_document)
    {
        if (is_null($preceding_document)) {
            array_push($this->openAPINullablesSetToNull, 'preceding_document');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preceding_document', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($preceding_document) && (mb_strlen($preceding_document) > 10)) {
            throw new \InvalidArgumentException('invalid length for $preceding_document when calling APISALESORDERSRVASalesOrderPrecdgProcFlowTypeUpdate., must be smaller than or equal to 10.');
        }

        $this->container['preceding_document'] = $preceding_document;

        return $this;
    }

    /**
     * Gets preceding_document_category
     *
     * @return string|null
     */
    public function getPrecedingDocumentCategory()
    {
        return $this->container['preceding_document_category'];
    }

    /**
     * Sets preceding_document_category
     *
     * @param string|null $preceding_document_category Document Category of Preceding SD Document
     *
     * @return self
     */
    public function setPrecedingDocumentCategory($preceding_document_category)
    {
        if (is_null($preceding_document_category)) {
            array_push($this->openAPINullablesSetToNull, 'preceding_document_category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preceding_document_category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($preceding_document_category) && (mb_strlen($preceding_document_category) > 4)) {
            throw new \InvalidArgumentException('invalid length for $preceding_document_category when calling APISALESORDERSRVASalesOrderPrecdgProcFlowTypeUpdate., must be smaller than or equal to 4.');
        }

        $this->container['preceding_document_category'] = $preceding_document_category;

        return $this;
    }

    /**
     * Gets process_flow_level
     *
     * @return string|null
     */
    public function getProcessFlowLevel()
    {
        return $this->container['process_flow_level'];
    }

    /**
     * Sets process_flow_level
     *
     * @param string|null $process_flow_level Level of the document flow record
     *
     * @return self
     */
    public function setProcessFlowLevel($process_flow_level)
    {
        if (is_null($process_flow_level)) {
            array_push($this->openAPINullablesSetToNull, 'process_flow_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('process_flow_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($process_flow_level) && (mb_strlen($process_flow_level) > 2)) {
            throw new \InvalidArgumentException('invalid length for $process_flow_level when calling APISALESORDERSRVASalesOrderPrecdgProcFlowTypeUpdate., must be smaller than or equal to 2.');
        }

        $this->container['process_flow_level'] = $process_flow_level;

        return $this;
    }

    /**
     * Gets overall_sd_process_status
     *
     * @return string|null
     */
    public function getOverallSdProcessStatus()
    {
        return $this->container['overall_sd_process_status'];
    }

    /**
     * Sets overall_sd_process_status
     *
     * @param string|null $overall_sd_process_status Overall Processing Status (Header/All Items)
     *
     * @return self
     */
    public function setOverallSdProcessStatus($overall_sd_process_status)
    {
        if (is_null($overall_sd_process_status)) {
            array_push($this->openAPINullablesSetToNull, 'overall_sd_process_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('overall_sd_process_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($overall_sd_process_status) && (mb_strlen($overall_sd_process_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $overall_sd_process_status when calling APISALESORDERSRVASalesOrderPrecdgProcFlowTypeUpdate., must be smaller than or equal to 1.');
        }

        $this->container['overall_sd_process_status'] = $overall_sd_process_status;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date Record Creation Date
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            array_push($this->openAPINullablesSetToNull, 'creation_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creation_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets creation_time
     *
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param string|null $creation_time Entry time
     *
     * @return self
     */
    public function setCreationTime($creation_time)
    {
        if (is_null($creation_time)) {
            array_push($this->openAPINullablesSetToNull, 'creation_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creation_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets last_change_date
     *
     * @return string|null
     */
    public function getLastChangeDate()
    {
        return $this->container['last_change_date'];
    }

    /**
     * Sets last_change_date
     *
     * @param string|null $last_change_date Last Changed On
     *
     * @return self
     */
    public function setLastChangeDate($last_change_date)
    {
        if (is_null($last_change_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_change_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_change_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_change_date'] = $last_change_date;

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


