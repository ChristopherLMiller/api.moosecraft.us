<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsXpGainedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsXpGainedTable Test Case
 */
class StatsXpGainedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsXpGainedTable
     */
    public $StatsXpGained;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_xp_gained'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsXpGained') ? [] : ['className' => 'App\Model\Table\StatsXpGainedTable'];
        $this->StatsXpGained = TableRegistry::get('StatsXpGained', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsXpGained);

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
