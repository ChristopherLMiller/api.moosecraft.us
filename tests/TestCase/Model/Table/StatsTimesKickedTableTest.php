<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsTimesKickedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsTimesKickedTable Test Case
 */
class StatsTimesKickedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsTimesKickedTable
     */
    public $StatsTimesKicked;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_times_kicked'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsTimesKicked') ? [] : ['className' => 'App\Model\Table\StatsTimesKickedTable'];
        $this->StatsTimesKicked = TableRegistry::get('StatsTimesKicked', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsTimesKicked);

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
