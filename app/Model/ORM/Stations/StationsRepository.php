<?php

namespace App\Model\Database;

class StationsRepository extends AbstractRepository
{
	public static function getEntityClassNames(): array
	{
		return [Stations::class, StationsTag::class];
	}
}
