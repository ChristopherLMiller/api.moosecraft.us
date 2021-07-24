<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsToolsBrokenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsToolsBrokenTable Test Case
 */
class StatsToolsBrokenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsToolsBrokenTable
     */
    public $StatsToolsBroken;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_tools_broken'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsToolsBroken') ? [] : ['className' => 'App\Model\Table\StatsToolsBrokenTable'];
        $this->StatsToolsBroken = TableRegistry::get('StatsToolsBroken', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsToolsBroken);

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
