<?php

namespace App\Model\Database;

use Nextras\Dbal\Utils\DateTimeImmutable;
use Nextras\Orm\Relationships\ManyHasMany;
use Nextras\Orm\Relationships\ManyHasOne;
use Nextras\Orm\Relationships\OneHasMany;

/**
 * @property        string                  $id                 {primary}
 * @property-read   int                     $input
 * @property-read   string                  $technologyId
 * @property-read   DateTimeImmutable       $createdAt          {default now}
 * @property        Stations                $station            {m:1 Stations, oneSided=true}
 */
class StationsTag extends AbstractEntity
{
    public function getStation()
    {

        bdump($this->stations->title);

    }

    public function getTechnology(): string
    {
        return $this->technologyId;
    }


    public function getDisabled(): array
    {
        $disabled = $this->findAll()->fetchAll();
        $ret = array();

        foreach($disabled as $item) {
            $ret[] = sprintf('%s-%s', $item->station_id, $item->input);
        }

        return $ret;
    }
}
