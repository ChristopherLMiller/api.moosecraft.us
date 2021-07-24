<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsPvpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsPvpTable Test Case
 */
class StatsPvpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsPvpTable
     */
    public $StatsPvp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_pvp'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsPvp') ? [] : ['className' => 'App\Model\Table\StatsPvpTable'];
        $this->StatsPvp = TableRegistry::get('StatsPvp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsPvp);

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
