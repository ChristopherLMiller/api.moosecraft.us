<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsBucketsEmptiedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsBucketsEmptiedTable Test Case
 */
class StatsBucketsEmptiedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsBucketsEmptiedTable
     */
    public $StatsBucketsEmptied;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_buckets_emptied'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsBucketsEmptied') ? [] : ['className' => 'App\Model\Table\StatsBucketsEmptiedTable'];
        $this->StatsBucketsEmptied = TableRegistry::get('StatsBucketsEmptied', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsBucketsEmptied);

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
