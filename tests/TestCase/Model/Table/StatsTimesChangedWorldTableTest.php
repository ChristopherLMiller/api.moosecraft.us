<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsTimesChangedWorldTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsTimesChangedWorldTable Test Case
 */
class StatsTimesChangedWorldTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsTimesChangedWorldTable
     */
    public $StatsTimesChangedWorld;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_times_changed_world'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsTimesChangedWorld') ? [] : ['className' => 'App\Model\Table\StatsTimesChangedWorldTable'];
        $this->StatsTimesChangedWorld = TableRegistry::get('StatsTimesChangedWorld', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsTimesChangedWorld);

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
