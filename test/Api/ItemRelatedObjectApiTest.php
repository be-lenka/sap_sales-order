<?php
/**
 * ItemRelatedObjectApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace BeLenka\SAP\SalesOrder\Test\Api;

use \BeLenka\SAP\SalesOrder\Configuration;
use \BeLenka\SAP\SalesOrder\ApiException;
use \BeLenka\SAP\SalesOrder\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ItemRelatedObjectApiTest Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\SalesOrder
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemRelatedObjectApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for aSalesOrderItemRelatedObjectGet
     *
     * Reads related objects from the items of all sales orders..
     *
     */
    public function testASalesOrderItemRelatedObjectGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aSalesOrderItemRelatedObjectPost
     *
     * Creates a related object for a sales order item..
     *
     */
    public function testASalesOrderItemRelatedObjectPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete
     *
     * Deletes a related object from a sales order item..
     *
     */
    public function testASalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrDelete()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet
     *
     * Reads a related object from a sales order item..
     *
     */
    public function testASalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet
     *
     * Reads the sales order header for a related object of a sales order item..
     *
     */
    public function testASalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aSalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderItemGet
     *
     * Reads the sales order item for a related object..
     *
     */
    public function testASalesOrderItemRelatedObjectSalesOrderSalesOrderSalesOrderItemSalesOrderItemSDDocRelatedObjectSequenceNmbrSDDocRelatedObjectSequenceNmbrToSalesOrderItemGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToRelatedObjectGet
     *
     * Reads the related object of a sales order item..
     *
     */
    public function testASalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToRelatedObjectGet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test case for aSalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToRelatedObjectPost
     *
     * Creates a related object for a specific sales order item..
     *
     */
    public function testASalesOrderItemSalesOrderSalesOrderSalesOrderItemSalesOrderItemToRelatedObjectPost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
