<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidUsersTable Test Case
 */
class BidUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BidUsersTable
     */
    public $BidUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('BidUsers') ? [] : ['className' => 'App\Model\Table\BidUsersTable'];
        $this->BidUsers = TableRegistry::get('BidUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BidUsers);

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
