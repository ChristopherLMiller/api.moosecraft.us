<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsBucketsFilledTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsBucketsFilledTable Test Case
 */
class StatsBucketsFilledTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsBucketsFilledTable
     */
    public $StatsBucketsFilled;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_buckets_filled'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsBucketsFilled') ? [] : ['className' => 'App\Model\Table\StatsBucketsFilledTable'];
        $this->StatsBucketsFilled = TableRegistry::get('StatsBucketsFilled', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsBucketsFilled);

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
