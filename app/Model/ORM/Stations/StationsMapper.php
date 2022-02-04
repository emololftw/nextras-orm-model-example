<?php

namespace App\Model\Database;


class StationsMapper extends AbstractMapper
{
	public function getTableName(): string
	{
		return 'db.stations';
	}
}
