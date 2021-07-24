<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsLastJoinTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsLastJoinTable Test Case
 */
class StatsLastJoinTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsLastJoinTable
     */
    public $StatsLastJoin;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_last_join'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsLastJoin') ? [] : ['className' => 'App\Model\Table\StatsLastJoinTable'];
        $this->StatsLastJoin = TableRegistry::get('StatsLastJoin', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsLastJoin);

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
