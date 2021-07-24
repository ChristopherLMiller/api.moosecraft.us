<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsBlocksPlacedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsBlocksPlacedTable Test Case
 */
class StatsBlocksPlacedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsBlocksPlacedTable
     */
    public $StatsBlocksPlaced;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_blocks_placed'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsBlocksPlaced') ? [] : ['className' => 'App\Model\Table\StatsBlocksPlacedTable'];
        $this->StatsBlocksPlaced = TableRegistry::get('StatsBlocksPlaced', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsBlocksPlaced);

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
