<?php

namespace App\Model\Database;

class StationsTagRepository extends AbstractRepository
{
	public static function getEntityClassNames(): array
	{
		return [StationsTag::class, Stations::class];
	}


    /*public function findByTags($name)
    {
        return $this->findBy(['tags->name' => $name]);
    }*/
}
