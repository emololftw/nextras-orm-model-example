<?php

namespace App\Model\Database;

class CustomersMapper extends AbstractMapper
{
	public function getTableName(): string
	{
		return 'db.customers';
	}
}
