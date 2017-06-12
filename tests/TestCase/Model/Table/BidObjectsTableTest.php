<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidObjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidObjectsTable Test Case
 */
class BidObjectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BidObjectsTable
     */
    public $BidObjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bid_objects',
        'app.bid_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BidObjects') ? [] : ['className' => 'App\Model\Table\BidObjectsTable'];
        $this->BidObjects = TableRegistry::get('BidObjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BidObjects);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
