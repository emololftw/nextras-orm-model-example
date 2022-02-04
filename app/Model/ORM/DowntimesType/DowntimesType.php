<?php

declare(strict_types=1);

namespace App\Model\Database;

use Nextras\Dbal\Utils\DateTimeImmutable;

/**
 * @property int $id {primary}
 * @property int|NULL $delete {default 1}
 * @property Users|NULL $userId {m:1 Users, oneSided=true}
 * @property string $title
 * @property string $description
 * @property string $color
 * @property DateTimeImmutable $createdAt
 */
class DowntimesType extends AbstractEntity
{

    public function getId(): int
    {
        return $this->id;
    }

    public function allowDelete(): bool
    {
        return $this->delete === 1;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCreated(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}
