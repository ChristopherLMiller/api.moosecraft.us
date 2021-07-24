<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsJoinsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsJoinsTable Test Case
 */
class StatsJoinsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsJoinsTable
     */
    public $StatsJoins;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_joins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsJoins') ? [] : ['className' => 'App\Model\Table\StatsJoinsTable'];
        $this->StatsJoins = TableRegistry::get('StatsJoins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsJoins);

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
