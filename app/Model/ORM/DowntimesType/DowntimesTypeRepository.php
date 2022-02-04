<?php

namespace App\Model\Database;


class DowntimesTypeRepository extends AbstractRepository
{
	public static function getEntityClassNames(): array
	{
		return [DowntimesType::class];
	}
}
