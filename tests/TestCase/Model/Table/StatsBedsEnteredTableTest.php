<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsBedsEnteredTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsBedsEnteredTable Test Case
 */
class StatsBedsEnteredTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsBedsEnteredTable
     */
    public $StatsBedsEntered;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_beds_entered'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsBedsEntered') ? [] : ['className' => 'App\Model\Table\StatsBedsEnteredTable'];
        $this->StatsBedsEntered = TableRegistry::get('StatsBedsEntered', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsBedsEntered);

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
