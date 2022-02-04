<?php

namespace App\Model\Database;

/**
 * @method Users getById($id)
 */
class UsersRepository extends AbstractRepository
{
	public static function getEntityClassNames(): array
	{
		return [Users::class];
	}
}
