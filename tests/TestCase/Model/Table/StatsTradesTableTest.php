<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsTradesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsTradesTable Test Case
 */
class StatsTradesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsTradesTable
     */
    public $StatsTrades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_trades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsTrades') ? [] : ['className' => 'App\Model\Table\StatsTradesTable'];
        $this->StatsTrades = TableRegistry::get('StatsTrades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsTrades);

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
