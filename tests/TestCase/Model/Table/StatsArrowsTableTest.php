<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsArrowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsArrowsTable Test Case
 */
class StatsArrowsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsArrowsTable
     */
    public $StatsArrows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_arrows'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsArrows') ? [] : ['className' => 'App\Model\Table\StatsArrowsTable'];
        $this->StatsArrows = TableRegistry::get('StatsArrows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsArrows);

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
