<?php

namespace App\Model\Database;

use Nextras\Dbal\Utils\DateTimeImmutable;

/**
 * @property int $id {primary}
 * @property string|NULL $username
 * @property string|NULL $password
 * @property string|NULL $name
 * @property int $theme
 * @property string|NULL $email
 * @property string|NULL $position
 * @property DateTimeImmutable|NULL $expire
 * @property string $permissions {default user}
 * @property int $online
 * @property DateTimeImmutable $lastActivity {default now}
 * @property DateTimeImmutable $createdAt {default now}
 * @property DateTimeImmutable $loginAt {default now}
 * @property string|NULL $avatar
 * @property string|NULL $ipAddr
 * @property string|NULL $loginId
 * @property int $requestLogout
 * @property string|NULL $requestToken
 * @property string|NULL $authToken
 * @property int $ban
 */
class Users extends AbstractEntity
{
}
