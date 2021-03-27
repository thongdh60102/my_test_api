<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartmentLeadersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartmentLeadersTable Test Case
 */
class DepartmentLeadersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartmentLeadersTable
     */
    public $DepartmentLeaders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DepartmentLeaders',
        'app.Users',
        'app.Departments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DepartmentLeaders') ? [] : ['className' => DepartmentLeadersTable::class];
        $this->DepartmentLeaders = TableRegistry::getTableLocator()->get('DepartmentLeaders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DepartmentLeaders);

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
