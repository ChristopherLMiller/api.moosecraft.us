<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsDeathTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsDeathTable Test Case
 */
class StatsDeathTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsDeathTable
     */
    public $StatsDeath;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_death'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsDeath') ? [] : ['className' => 'App\Model\Table\StatsDeathTable'];
        $this->StatsDeath = TableRegistry::get('StatsDeath', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsDeath);

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
