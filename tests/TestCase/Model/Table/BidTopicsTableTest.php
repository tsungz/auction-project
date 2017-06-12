<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidTopicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidTopicsTable Test Case
 */
class BidTopicsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BidTopicsTable
     */
    public $BidTopics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bid_topics',
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
        $config = TableRegistry::exists('BidTopics') ? [] : ['className' => 'App\Model\Table\BidTopicsTable'];
        $this->BidTopics = TableRegistry::get('BidTopics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BidTopics);

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
