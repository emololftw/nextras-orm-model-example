<?php

namespace App\Model\Database;


class UsersMapper extends AbstractMapper
{
	public function getTableName(): string
	{
		return 'users';
	}
}
