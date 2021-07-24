<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WebsiteSliderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WebsiteSliderTable Test Case
 */
class WebsiteSliderTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WebsiteSliderTable
     */
    public $WebsiteSlider;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.website_slider'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WebsiteSlider') ? [] : ['className' => 'App\Model\Table\WebsiteSliderTable'];
        $this->WebsiteSlider = TableRegistry::get('WebsiteSlider', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WebsiteSlider);

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
}
