<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BidObject Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $details
 * @property string $images_a
 * @property string $images_b
 * @property string $images_c
 * @property int $step_call
 * @property int $status
 * @property string $origin
 * @property string $brand
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\BidUser $bid_user
 */
class BidObject extends Entity
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
        '*' => true,
        'id' => false
    ];
}
