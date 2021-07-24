<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsPvpStreakTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsPvpStreakTable Test Case
 */
class StatsPvpStreakTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsPvpStreakTable
     */
    public $StatsPvpStreak;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_pvp_streak'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsPvpStreak') ? [] : ['className' => 'App\Model\Table\StatsPvpStreakTable'];
        $this->StatsPvpStreak = TableRegistry::get('StatsPvpStreak', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsPvpStreak);

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
