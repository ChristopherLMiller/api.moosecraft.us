<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsLocksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsLocksTable Test Case
 */
class StatsLocksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsLocksTable
     */
    public $StatsLocks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_locks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsLocks') ? [] : ['className' => 'App\Model\Table\StatsLocksTable'];
        $this->StatsLocks = TableRegistry::get('StatsLocks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsLocks);

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
