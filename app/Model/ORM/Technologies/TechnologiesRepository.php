<?php

declare(strict_types=1);

namespace App\Model\Database;


/**
 * @method Technologies|NULL getById($id)
 */
class TechnologiesRepository extends AbstractRepository
{
	static function getEntityClassNames(): array
	{
		return [Technologies::class];
	}

   /* public function findById()
    {
       return $this->findAll()->orderBy('createdAt', ICollection::DESC);
    }*/
}
