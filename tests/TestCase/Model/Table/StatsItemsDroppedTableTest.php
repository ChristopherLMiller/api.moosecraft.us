<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsItemsDroppedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsItemsDroppedTable Test Case
 */
class StatsItemsDroppedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsItemsDroppedTable
     */
    public $StatsItemsDropped;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_items_dropped'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsItemsDropped') ? [] : ['className' => 'App\Model\Table\StatsItemsDroppedTable'];
        $this->StatsItemsDropped = TableRegistry::get('StatsItemsDropped', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsItemsDropped);

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
