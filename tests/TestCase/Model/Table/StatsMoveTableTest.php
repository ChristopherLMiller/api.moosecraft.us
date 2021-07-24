<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsMoveTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsMoveTable Test Case
 */
class StatsMoveTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsMoveTable
     */
    public $StatsMove;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_move'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsMove') ? [] : ['className' => 'App\Model\Table\StatsMoveTable'];
        $this->StatsMove = TableRegistry::get('StatsMove', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsMove);

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
