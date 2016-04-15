<?php
namespace EmailQueue\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailQueue Entity.
 *
 * @property int $id
 * @property string $from_email
 * @property string $from_name
 * @property string $to
 * @property string $cc
 * @property string $bcc
 * @property string $reply_to
 * @property string $subject
 * @property string $config
 * @property string $template
 * @property string $layout
 * @property string $theme
 * @property string $format
 * @property string $template_vars
 * @property string $headers
 * @property bool $sent
 * @property bool $locked
 * @property int $send_retries
 * @property \Cake\I18n\Time $send_at
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class EmailQueue extends Entity
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
        'id' => false,
    ];
}