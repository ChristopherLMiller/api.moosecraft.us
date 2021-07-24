<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsPvpTopStreakTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsPvpTopStreakTable Test Case
 */
class StatsPvpTopStreakTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsPvpTopStreakTable
     */
    public $StatsPvpTopStreak;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_pvp_top_streak'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsPvpTopStreak') ? [] : ['className' => 'App\Model\Table\StatsPvpTopStreakTable'];
        $this->StatsPvpTopStreak = TableRegistry::get('StatsPvpTopStreak', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsPvpTopStreak);

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
