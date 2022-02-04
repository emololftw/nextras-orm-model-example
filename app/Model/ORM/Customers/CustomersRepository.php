<?php

namespace App\Model\Database;

class CustomersRepository extends AbstractRepository
{
	public static function getEntityClassNames(): array
	{
		return [Customers::class];
	}
}
