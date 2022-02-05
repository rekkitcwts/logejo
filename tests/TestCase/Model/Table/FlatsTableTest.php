<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlatsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlatsTable Test Case
 */
class FlatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FlatsTable
     */
    protected $Flats;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Flats',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Flats') ? [] : ['className' => FlatsTable::class];
        $this->Flats = $this->getTableLocator()->get('Flats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Flats);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FlatsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
