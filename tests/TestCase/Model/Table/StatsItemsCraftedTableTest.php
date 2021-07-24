<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsItemsCraftedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsItemsCraftedTable Test Case
 */
class StatsItemsCraftedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsItemsCraftedTable
     */
    public $StatsItemsCrafted;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_items_crafted'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsItemsCrafted') ? [] : ['className' => 'App\Model\Table\StatsItemsCraftedTable'];
        $this->StatsItemsCrafted = TableRegistry::get('StatsItemsCrafted', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsItemsCrafted);

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
