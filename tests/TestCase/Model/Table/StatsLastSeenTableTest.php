<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsLastSeenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsLastSeenTable Test Case
 */
class StatsLastSeenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsLastSeenTable
     */
    public $StatsLastSeen;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_last_seen'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsLastSeen') ? [] : ['className' => 'App\Model\Table\StatsLastSeenTable'];
        $this->StatsLastSeen = TableRegistry::get('StatsLastSeen', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsLastSeen);

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
