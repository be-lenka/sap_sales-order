<?php
/**
 * APISALESORDERSRVASalesOrderHeaderPartnerTypeTest
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
 * Please update the test case below to test the model.
 */

namespace BeLenka\SAP\SalesOrder\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * APISALESORDERSRVASalesOrderHeaderPartnerTypeTest Class Doc Comment
 *
 * @category    Class
 * @description APISALESORDERSRVASalesOrderHeaderPartnerType
 * @package     BeLenka\SAP\SalesOrder
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class APISALESORDERSRVASalesOrderHeaderPartnerTypeTest extends TestCase
{

    /**
     * Setup before running any test case
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
     * Test "APISALESORDERSRVASalesOrderHeaderPartnerType"
     */
    public function testAPISALESORDERSRVASalesOrderHeaderPartnerType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "sales_order"
     */
    public function testPropertySalesOrder()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "partner_function"
     */
    public function testPropertyPartnerFunction()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "partner_function_internal_code"
     */
    public function testPropertyPartnerFunctionInternalCode()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "customer"
     */
    public function testPropertyCustomer()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "supplier"
     */
    public function testPropertySupplier()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "personnel"
     */
    public function testPropertyPersonnel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "contact_person"
     */
    public function testPropertyContactPerson()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reference_business_partner"
     */
    public function testPropertyReferenceBusinessPartner()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "address_id"
     */
    public function testPropertyAddressId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "vat_registration"
     */
    public function testPropertyVatRegistration()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "to_address"
     */
    public function testPropertyToAddress()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "to_sales_order"
     */
    public function testPropertyToSalesOrder()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
