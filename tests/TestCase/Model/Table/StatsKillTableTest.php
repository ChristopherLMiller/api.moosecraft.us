<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsKillTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsKillTable Test Case
 */
class StatsKillTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsKillTable
     */
    public $StatsKill;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_kill'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsKill') ? [] : ['className' => 'App\Model\Table\StatsKillTable'];
        $this->StatsKill = TableRegistry::get('StatsKill', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsKill);

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
