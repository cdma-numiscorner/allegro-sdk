<?php
/**
 * OrderEventTypeTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\AllegroSdk\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * OrderEventTypeTest Class Doc Comment
 *
 * @category    Class
 * @description Type of order event. * &#x60;BOUGHT&#x60; - purchase without checkout form filled in * &#x60;FILLED_IN&#x60; - checkout form filled in but payment is not completed yet so data could still change * &#x60;READY_FOR_PROCESSING&#x60; - payment completed. Purchase is ready for processing. * &#x60;BUYER_CANCELLED&#x60; - purchase cancelled by buyer * &#x60;FULFILLMENT_STATUS_CHANGED&#x60;: fulfillment status changed. * &#x60;BUYER_MODIFIED&#x60; - purchase modified by buyer * &#x60;AUTO_CANCELLED&#x60; - purchase cancelled automatically by Allegro
 * @package     OpenAPI\AllegroSdk
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OrderEventTypeTest extends TestCase
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
     * Test "OrderEventType"
     */
    public function testOrderEventType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
