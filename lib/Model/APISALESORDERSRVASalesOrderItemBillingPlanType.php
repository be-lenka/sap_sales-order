<?php
/**
 * APISALESORDERSRVASalesOrderItemBillingPlanType
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
 * APISALESORDERSRVASalesOrderItemBillingPlanType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\SalesOrder
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APISALESORDERSRVASalesOrderItemBillingPlanType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_SALES_ORDER_SRV.A_SalesOrderItemBillingPlanType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sales_order' => 'string',
        'sales_order_item' => 'string',
        'billing_plan' => 'string',
        'billing_plan_is_in_header' => 'bool',
        'billing_plan_start_date' => 'string',
        'billing_plan_start_date_rule' => 'string',
        'reference_billing_plan' => 'string',
        'billing_plan_category' => 'string',
        'billing_plan_type' => 'string',
        'billing_plan_end_date' => 'string',
        'billing_plan_end_date_rule' => 'string',
        'billing_plan_search_term' => 'string',
        'to_billing_plan_item' => '\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemBillingPlanTypeToBillingPlanItem',
        'to_sales_order' => '\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderType',
        'to_sales_order_item' => '\BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sales_order' => null,
        'sales_order_item' => null,
        'billing_plan' => null,
        'billing_plan_is_in_header' => null,
        'billing_plan_start_date' => null,
        'billing_plan_start_date_rule' => null,
        'reference_billing_plan' => null,
        'billing_plan_category' => null,
        'billing_plan_type' => null,
        'billing_plan_end_date' => null,
        'billing_plan_end_date_rule' => null,
        'billing_plan_search_term' => null,
        'to_billing_plan_item' => null,
        'to_sales_order' => null,
        'to_sales_order_item' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sales_order' => false,
		'sales_order_item' => false,
		'billing_plan' => false,
		'billing_plan_is_in_header' => true,
		'billing_plan_start_date' => true,
		'billing_plan_start_date_rule' => true,
		'reference_billing_plan' => true,
		'billing_plan_category' => true,
		'billing_plan_type' => true,
		'billing_plan_end_date' => true,
		'billing_plan_end_date_rule' => true,
		'billing_plan_search_term' => true,
		'to_billing_plan_item' => false,
		'to_sales_order' => false,
		'to_sales_order_item' => false
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
        'sales_order' => 'SalesOrder',
        'sales_order_item' => 'SalesOrderItem',
        'billing_plan' => 'BillingPlan',
        'billing_plan_is_in_header' => 'BillingPlanIsInHeader',
        'billing_plan_start_date' => 'BillingPlanStartDate',
        'billing_plan_start_date_rule' => 'BillingPlanStartDateRule',
        'reference_billing_plan' => 'ReferenceBillingPlan',
        'billing_plan_category' => 'BillingPlanCategory',
        'billing_plan_type' => 'BillingPlanType',
        'billing_plan_end_date' => 'BillingPlanEndDate',
        'billing_plan_end_date_rule' => 'BillingPlanEndDateRule',
        'billing_plan_search_term' => 'BillingPlanSearchTerm',
        'to_billing_plan_item' => 'to_BillingPlanItem',
        'to_sales_order' => 'to_SalesOrder',
        'to_sales_order_item' => 'to_SalesOrderItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_order' => 'setSalesOrder',
        'sales_order_item' => 'setSalesOrderItem',
        'billing_plan' => 'setBillingPlan',
        'billing_plan_is_in_header' => 'setBillingPlanIsInHeader',
        'billing_plan_start_date' => 'setBillingPlanStartDate',
        'billing_plan_start_date_rule' => 'setBillingPlanStartDateRule',
        'reference_billing_plan' => 'setReferenceBillingPlan',
        'billing_plan_category' => 'setBillingPlanCategory',
        'billing_plan_type' => 'setBillingPlanType',
        'billing_plan_end_date' => 'setBillingPlanEndDate',
        'billing_plan_end_date_rule' => 'setBillingPlanEndDateRule',
        'billing_plan_search_term' => 'setBillingPlanSearchTerm',
        'to_billing_plan_item' => 'setToBillingPlanItem',
        'to_sales_order' => 'setToSalesOrder',
        'to_sales_order_item' => 'setToSalesOrderItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_order' => 'getSalesOrder',
        'sales_order_item' => 'getSalesOrderItem',
        'billing_plan' => 'getBillingPlan',
        'billing_plan_is_in_header' => 'getBillingPlanIsInHeader',
        'billing_plan_start_date' => 'getBillingPlanStartDate',
        'billing_plan_start_date_rule' => 'getBillingPlanStartDateRule',
        'reference_billing_plan' => 'getReferenceBillingPlan',
        'billing_plan_category' => 'getBillingPlanCategory',
        'billing_plan_type' => 'getBillingPlanType',
        'billing_plan_end_date' => 'getBillingPlanEndDate',
        'billing_plan_end_date_rule' => 'getBillingPlanEndDateRule',
        'billing_plan_search_term' => 'getBillingPlanSearchTerm',
        'to_billing_plan_item' => 'getToBillingPlanItem',
        'to_sales_order' => 'getToSalesOrder',
        'to_sales_order_item' => 'getToSalesOrderItem'
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
        $this->setIfExists('sales_order', $data ?? [], null);
        $this->setIfExists('sales_order_item', $data ?? [], null);
        $this->setIfExists('billing_plan', $data ?? [], null);
        $this->setIfExists('billing_plan_is_in_header', $data ?? [], null);
        $this->setIfExists('billing_plan_start_date', $data ?? [], null);
        $this->setIfExists('billing_plan_start_date_rule', $data ?? [], null);
        $this->setIfExists('reference_billing_plan', $data ?? [], null);
        $this->setIfExists('billing_plan_category', $data ?? [], null);
        $this->setIfExists('billing_plan_type', $data ?? [], null);
        $this->setIfExists('billing_plan_end_date', $data ?? [], null);
        $this->setIfExists('billing_plan_end_date_rule', $data ?? [], null);
        $this->setIfExists('billing_plan_search_term', $data ?? [], null);
        $this->setIfExists('to_billing_plan_item', $data ?? [], null);
        $this->setIfExists('to_sales_order', $data ?? [], null);
        $this->setIfExists('to_sales_order_item', $data ?? [], null);
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

        if (!is_null($this->container['sales_order']) && (mb_strlen($this->container['sales_order']) > 10)) {
            $invalidProperties[] = "invalid value for 'sales_order', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['sales_order_item']) && (mb_strlen($this->container['sales_order_item']) > 6)) {
            $invalidProperties[] = "invalid value for 'sales_order_item', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['billing_plan']) && (mb_strlen($this->container['billing_plan']) > 10)) {
            $invalidProperties[] = "invalid value for 'billing_plan', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['billing_plan_start_date_rule']) && (mb_strlen($this->container['billing_plan_start_date_rule']) > 2)) {
            $invalidProperties[] = "invalid value for 'billing_plan_start_date_rule', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['reference_billing_plan']) && (mb_strlen($this->container['reference_billing_plan']) > 10)) {
            $invalidProperties[] = "invalid value for 'reference_billing_plan', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['billing_plan_category']) && (mb_strlen($this->container['billing_plan_category']) > 1)) {
            $invalidProperties[] = "invalid value for 'billing_plan_category', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['billing_plan_type']) && (mb_strlen($this->container['billing_plan_type']) > 2)) {
            $invalidProperties[] = "invalid value for 'billing_plan_type', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['billing_plan_end_date_rule']) && (mb_strlen($this->container['billing_plan_end_date_rule']) > 2)) {
            $invalidProperties[] = "invalid value for 'billing_plan_end_date_rule', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['billing_plan_search_term']) && (mb_strlen($this->container['billing_plan_search_term']) > 10)) {
            $invalidProperties[] = "invalid value for 'billing_plan_search_term', the character length must be smaller than or equal to 10.";
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
     * Gets sales_order
     *
     * @return string|null
     */
    public function getSalesOrder()
    {
        return $this->container['sales_order'];
    }

    /**
     * Sets sales_order
     *
     * @param string|null $sales_order sales_order
     *
     * @return self
     */
    public function setSalesOrder($sales_order)
    {
        if (is_null($sales_order)) {
            throw new \InvalidArgumentException('non-nullable sales_order cannot be null');
        }
        if ((mb_strlen($sales_order) > 10)) {
            throw new \InvalidArgumentException('invalid length for $sales_order when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 10.');
        }

        $this->container['sales_order'] = $sales_order;

        return $this;
    }

    /**
     * Gets sales_order_item
     *
     * @return string|null
     */
    public function getSalesOrderItem()
    {
        return $this->container['sales_order_item'];
    }

    /**
     * Sets sales_order_item
     *
     * @param string|null $sales_order_item Sales Order Item
     *
     * @return self
     */
    public function setSalesOrderItem($sales_order_item)
    {
        if (is_null($sales_order_item)) {
            throw new \InvalidArgumentException('non-nullable sales_order_item cannot be null');
        }
        if ((mb_strlen($sales_order_item) > 6)) {
            throw new \InvalidArgumentException('invalid length for $sales_order_item when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 6.');
        }

        $this->container['sales_order_item'] = $sales_order_item;

        return $this;
    }

    /**
     * Gets billing_plan
     *
     * @return string|null
     */
    public function getBillingPlan()
    {
        return $this->container['billing_plan'];
    }

    /**
     * Sets billing_plan
     *
     * @param string|null $billing_plan Billing/Invoicing Plan Number
     *
     * @return self
     */
    public function setBillingPlan($billing_plan)
    {
        if (is_null($billing_plan)) {
            throw new \InvalidArgumentException('non-nullable billing_plan cannot be null');
        }
        if ((mb_strlen($billing_plan) > 10)) {
            throw new \InvalidArgumentException('invalid length for $billing_plan when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 10.');
        }

        $this->container['billing_plan'] = $billing_plan;

        return $this;
    }

    /**
     * Gets billing_plan_is_in_header
     *
     * @return bool|null
     */
    public function getBillingPlanIsInHeader()
    {
        return $this->container['billing_plan_is_in_header'];
    }

    /**
     * Sets billing_plan_is_in_header
     *
     * @param bool|null $billing_plan_is_in_header Indicator for Billing Plan on Header
     *
     * @return self
     */
    public function setBillingPlanIsInHeader($billing_plan_is_in_header)
    {
        if (is_null($billing_plan_is_in_header)) {
            array_push($this->openAPINullablesSetToNull, 'billing_plan_is_in_header');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_plan_is_in_header', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_plan_is_in_header'] = $billing_plan_is_in_header;

        return $this;
    }

    /**
     * Gets billing_plan_start_date
     *
     * @return string|null
     */
    public function getBillingPlanStartDate()
    {
        return $this->container['billing_plan_start_date'];
    }

    /**
     * Sets billing_plan_start_date
     *
     * @param string|null $billing_plan_start_date Start Date of Billing/Invoicing Plan
     *
     * @return self
     */
    public function setBillingPlanStartDate($billing_plan_start_date)
    {
        if (is_null($billing_plan_start_date)) {
            array_push($this->openAPINullablesSetToNull, 'billing_plan_start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_plan_start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_plan_start_date'] = $billing_plan_start_date;

        return $this;
    }

    /**
     * Gets billing_plan_start_date_rule
     *
     * @return string|null
     */
    public function getBillingPlanStartDateRule()
    {
        return $this->container['billing_plan_start_date_rule'];
    }

    /**
     * Sets billing_plan_start_date_rule
     *
     * @param string|null $billing_plan_start_date_rule Rule for Origin of Start Date of Billing/Invoicing Plan
     *
     * @return self
     */
    public function setBillingPlanStartDateRule($billing_plan_start_date_rule)
    {
        if (is_null($billing_plan_start_date_rule)) {
            array_push($this->openAPINullablesSetToNull, 'billing_plan_start_date_rule');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_plan_start_date_rule', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($billing_plan_start_date_rule) && (mb_strlen($billing_plan_start_date_rule) > 2)) {
            throw new \InvalidArgumentException('invalid length for $billing_plan_start_date_rule when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 2.');
        }

        $this->container['billing_plan_start_date_rule'] = $billing_plan_start_date_rule;

        return $this;
    }

    /**
     * Gets reference_billing_plan
     *
     * @return string|null
     */
    public function getReferenceBillingPlan()
    {
        return $this->container['reference_billing_plan'];
    }

    /**
     * Sets reference_billing_plan
     *
     * @param string|null $reference_billing_plan Reference Billing Plan Number / Invoicing Plan Number
     *
     * @return self
     */
    public function setReferenceBillingPlan($reference_billing_plan)
    {
        if (is_null($reference_billing_plan)) {
            array_push($this->openAPINullablesSetToNull, 'reference_billing_plan');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference_billing_plan', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($reference_billing_plan) && (mb_strlen($reference_billing_plan) > 10)) {
            throw new \InvalidArgumentException('invalid length for $reference_billing_plan when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 10.');
        }

        $this->container['reference_billing_plan'] = $reference_billing_plan;

        return $this;
    }

    /**
     * Gets billing_plan_category
     *
     * @return string|null
     */
    public function getBillingPlanCategory()
    {
        return $this->container['billing_plan_category'];
    }

    /**
     * Sets billing_plan_category
     *
     * @param string|null $billing_plan_category Billing plan category
     *
     * @return self
     */
    public function setBillingPlanCategory($billing_plan_category)
    {
        if (is_null($billing_plan_category)) {
            array_push($this->openAPINullablesSetToNull, 'billing_plan_category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_plan_category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($billing_plan_category) && (mb_strlen($billing_plan_category) > 1)) {
            throw new \InvalidArgumentException('invalid length for $billing_plan_category when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 1.');
        }

        $this->container['billing_plan_category'] = $billing_plan_category;

        return $this;
    }

    /**
     * Gets billing_plan_type
     *
     * @return string|null
     */
    public function getBillingPlanType()
    {
        return $this->container['billing_plan_type'];
    }

    /**
     * Sets billing_plan_type
     *
     * @param string|null $billing_plan_type Billing/Invoicing Plan Type
     *
     * @return self
     */
    public function setBillingPlanType($billing_plan_type)
    {
        if (is_null($billing_plan_type)) {
            array_push($this->openAPINullablesSetToNull, 'billing_plan_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_plan_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($billing_plan_type) && (mb_strlen($billing_plan_type) > 2)) {
            throw new \InvalidArgumentException('invalid length for $billing_plan_type when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 2.');
        }

        $this->container['billing_plan_type'] = $billing_plan_type;

        return $this;
    }

    /**
     * Gets billing_plan_end_date
     *
     * @return string|null
     */
    public function getBillingPlanEndDate()
    {
        return $this->container['billing_plan_end_date'];
    }

    /**
     * Sets billing_plan_end_date
     *
     * @param string|null $billing_plan_end_date End Date of Billing/Invoicing Plan
     *
     * @return self
     */
    public function setBillingPlanEndDate($billing_plan_end_date)
    {
        if (is_null($billing_plan_end_date)) {
            array_push($this->openAPINullablesSetToNull, 'billing_plan_end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_plan_end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_plan_end_date'] = $billing_plan_end_date;

        return $this;
    }

    /**
     * Gets billing_plan_end_date_rule
     *
     * @return string|null
     */
    public function getBillingPlanEndDateRule()
    {
        return $this->container['billing_plan_end_date_rule'];
    }

    /**
     * Sets billing_plan_end_date_rule
     *
     * @param string|null $billing_plan_end_date_rule Rule for Origin of End Date for Billing/Invoicing Plan
     *
     * @return self
     */
    public function setBillingPlanEndDateRule($billing_plan_end_date_rule)
    {
        if (is_null($billing_plan_end_date_rule)) {
            array_push($this->openAPINullablesSetToNull, 'billing_plan_end_date_rule');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_plan_end_date_rule', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($billing_plan_end_date_rule) && (mb_strlen($billing_plan_end_date_rule) > 2)) {
            throw new \InvalidArgumentException('invalid length for $billing_plan_end_date_rule when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 2.');
        }

        $this->container['billing_plan_end_date_rule'] = $billing_plan_end_date_rule;

        return $this;
    }

    /**
     * Gets billing_plan_search_term
     *
     * @return string|null
     */
    public function getBillingPlanSearchTerm()
    {
        return $this->container['billing_plan_search_term'];
    }

    /**
     * Sets billing_plan_search_term
     *
     * @param string|null $billing_plan_search_term Sort Field
     *
     * @return self
     */
    public function setBillingPlanSearchTerm($billing_plan_search_term)
    {
        if (is_null($billing_plan_search_term)) {
            array_push($this->openAPINullablesSetToNull, 'billing_plan_search_term');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_plan_search_term', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($billing_plan_search_term) && (mb_strlen($billing_plan_search_term) > 10)) {
            throw new \InvalidArgumentException('invalid length for $billing_plan_search_term when calling APISALESORDERSRVASalesOrderItemBillingPlanType., must be smaller than or equal to 10.');
        }

        $this->container['billing_plan_search_term'] = $billing_plan_search_term;

        return $this;
    }

    /**
     * Gets to_billing_plan_item
     *
     * @return \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemBillingPlanTypeToBillingPlanItem|null
     */
    public function getToBillingPlanItem()
    {
        return $this->container['to_billing_plan_item'];
    }

    /**
     * Sets to_billing_plan_item
     *
     * @param \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemBillingPlanTypeToBillingPlanItem|null $to_billing_plan_item to_billing_plan_item
     *
     * @return self
     */
    public function setToBillingPlanItem($to_billing_plan_item)
    {
        if (is_null($to_billing_plan_item)) {
            throw new \InvalidArgumentException('non-nullable to_billing_plan_item cannot be null');
        }
        $this->container['to_billing_plan_item'] = $to_billing_plan_item;

        return $this;
    }

    /**
     * Gets to_sales_order
     *
     * @return \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderType|null
     */
    public function getToSalesOrder()
    {
        return $this->container['to_sales_order'];
    }

    /**
     * Sets to_sales_order
     *
     * @param \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderType|null $to_sales_order to_sales_order
     *
     * @return self
     */
    public function setToSalesOrder($to_sales_order)
    {
        if (is_null($to_sales_order)) {
            throw new \InvalidArgumentException('non-nullable to_sales_order cannot be null');
        }
        $this->container['to_sales_order'] = $to_sales_order;

        return $this;
    }

    /**
     * Gets to_sales_order_item
     *
     * @return \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemType|null
     */
    public function getToSalesOrderItem()
    {
        return $this->container['to_sales_order_item'];
    }

    /**
     * Sets to_sales_order_item
     *
     * @param \BeLenka\SAP\SalesOrder\Model\APISALESORDERSRVASalesOrderItemType|null $to_sales_order_item to_sales_order_item
     *
     * @return self
     */
    public function setToSalesOrderItem($to_sales_order_item)
    {
        if (is_null($to_sales_order_item)) {
            throw new \InvalidArgumentException('non-nullable to_sales_order_item cannot be null');
        }
        $this->container['to_sales_order_item'] = $to_sales_order_item;

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


