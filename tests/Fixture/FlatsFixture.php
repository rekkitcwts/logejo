<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlatsFixture
 */
class FlatsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'flatname' => 'Lorem ipsum dolor sit amet',
                'flattype' => 'Lorem ipsum dolor sit amet',
                'flatlat' => 1,
                'flatlng' => 1,
                'flatlgbt' => 1,
                'created' => 1644067050,
                'modified' => 1644067050,
                'is_active' => 1,
            ],
        ];
        parent::init();
    }
}
