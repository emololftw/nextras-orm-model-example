<?php

declare(strict_types=1);

namespace App\Model\Database;

use Nextras\Orm\Model\Model;

/**
 * Model
 *
 * @property-read UsersRepository               $users
 * @property-read TechnologiesRepository        $technologies
 * @property-read DowntimesTypeRepository       $downtimesType
 * @property-read CustomersRepository           $customers
 * @property-read StationsRepository            $stations
 * @property-read StationsTagRepository         $stationsTag
 */
class ORM extends Model
{
}
