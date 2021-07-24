<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsPlaytimeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsPlaytimeTable Test Case
 */
class StatsPlaytimeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsPlaytimeTable
     */
    public $StatsPlaytime;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_playtime'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsPlaytime') ? [] : ['className' => 'App\Model\Table\StatsPlaytimeTable'];
        $this->StatsPlaytime = TableRegistry::get('StatsPlaytime', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsPlaytime);

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
