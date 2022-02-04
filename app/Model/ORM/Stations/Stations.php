<?php

namespace App\Model\Database;

/**
 * @property string $id {primary}
 * @property Customers $customerId {m:1 Customers, oneSided=true}
 * @property string $title
 * @property string|NULL $modules
 * @property string|NULL $voltageSupply
 * @property string|NULL $location
 * @property int $inputs {default 16}
 * @property string $type {enum self::TYPE_*}
 * @property string $isim
 * @property string $iccid
 * @property string $ip
 *
 */
class Stations extends AbstractEntity
{
	public const TYPE_BOX = 'BOX';
	public const TYPE_MINIBOX = 'MINIBOX';
}
