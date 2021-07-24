<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsItemsPickedUpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsItemsPickedUpTable Test Case
 */
class StatsItemsPickedUpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsItemsPickedUpTable
     */
    public $StatsItemsPickedUp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_items_picked_up'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsItemsPickedUp') ? [] : ['className' => 'App\Model\Table\StatsItemsPickedUpTable'];
        $this->StatsItemsPickedUp = TableRegistry::get('StatsItemsPickedUp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsItemsPickedUp);

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
