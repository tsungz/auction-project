<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidSponsorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidSponsorsTable Test Case
 */
class BidSponsorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BidSponsorsTable
     */
    public $BidSponsors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bid_sponsors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BidSponsors') ? [] : ['className' => 'App\Model\Table\BidSponsorsTable'];
        $this->BidSponsors = TableRegistry::get('BidSponsors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BidSponsors);

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
