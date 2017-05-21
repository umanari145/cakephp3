<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $invoice_name
 * @property string $transfer_date_type
 * @property string $transfer_account
 * @property string $note
 * @property int $created_user
 * @property \Cake\I18n\FrozenTime $created
 * @property int $modified_user
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $is_delete
 *
 * @property \App\Model\Entity\Customeritem[] $customeritems
 * @property \App\Model\Entity\Invoice[] $invoices
 * @property \App\Model\Entity\Report[] $reports
 */
class Customer extends Entity
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
