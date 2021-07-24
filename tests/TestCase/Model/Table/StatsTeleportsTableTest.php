<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsTeleportsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsTeleportsTable Test Case
 */
class StatsTeleportsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsTeleportsTable
     */
    public $StatsTeleports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_teleports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsTeleports') ? [] : ['className' => 'App\Model\Table\StatsTeleportsTable'];
        $this->StatsTeleports = TableRegistry::get('StatsTeleports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsTeleports);

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
