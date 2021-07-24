<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsFishCaughtTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsFishCaughtTable Test Case
 */
class StatsFishCaughtTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsFishCaughtTable
     */
    public $StatsFishCaught;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_fish_caught'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsFishCaught') ? [] : ['className' => 'App\Model\Table\StatsFishCaughtTable'];
        $this->StatsFishCaught = TableRegistry::get('StatsFishCaught', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsFishCaught);

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
