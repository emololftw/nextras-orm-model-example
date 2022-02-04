<?php

namespace App\Model\Database;

use App\Model\User\ExtendedUser;
use Nextras\Orm\Entity\Entity;

abstract class AbstractEntity extends Entity
{
    private ExtendedUser $_user;

    public function injectUser(ExtendedUser $user) {
        $this->_user = $user;
    }

    public function onBeforeInsert(): void
    {
        parent::onBeforeInsert();

        if(!isset($this->userId)) {
            $this->userId = $this->_user->getId();
        }

        if(!isset($this->createdAt)) {
            $this->createdAt = new \DateTime();
        }

    }
}
