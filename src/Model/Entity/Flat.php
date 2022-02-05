<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flat Entity
 *
 * @property int $id
 * @property string $flatname
 * @property string $flattype
 * @property float $flatlat
 * @property float $flatlng
 * @property int $flatlgbt
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $is_active
 */
class Flat extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'flatname' => true,
        'flattype' => true,
        'flatlat' => true,
        'flatlng' => true,
        'flatlgbt' => true,
        'created' => true,
        'modified' => true,
        'is_active' => true,
    ];
}
