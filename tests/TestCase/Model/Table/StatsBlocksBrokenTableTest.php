<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsBlocksBrokenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsBlocksBrokenTable Test Case
 */
class StatsBlocksBrokenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsBlocksBrokenTable
     */
    public $StatsBlocksBroken;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_blocks_broken'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsBlocksBroken') ? [] : ['className' => 'App\Model\Table\StatsBlocksBrokenTable'];
        $this->StatsBlocksBroken = TableRegistry::get('StatsBlocksBroken', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsBlocksBroken);

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
