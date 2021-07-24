<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsEggsThrownTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsEggsThrownTable Test Case
 */
class StatsEggsThrownTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsEggsThrownTable
     */
    public $StatsEggsThrown;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_eggs_thrown'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsEggsThrown') ? [] : ['className' => 'App\Model\Table\StatsEggsThrownTable'];
        $this->StatsEggsThrown = TableRegistry::get('StatsEggsThrown', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsEggsThrown);

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
