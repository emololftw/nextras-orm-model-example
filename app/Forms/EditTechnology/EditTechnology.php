<?php

declare(strict_types=1);

namespace App\Forms\EditTechnology;

use App\Forms\FormFactory;
use App\Model\Api\StationsTagRepository;
use App\Model\Api\StationsRepository;
use App\Model\Database\ORM;
use App\Model\TechnologiesRepository;
use App\Model\User\ExtendedUser;
use Nette;
use Nette\Application\BadRequestException;
use Nette\Application\UI;
use Nette\SmartObject;
use Throwable;

final class EditTechnology extends UI\Control
{
    use SmartObject;

	public $onSuccess;

    public function __construct(
		public string $technologyId,
		private FormFactory $factory,
        private ORM $orm,
    ) {
    }

	/**
	 * @throws BadRequestException
	 */
	protected function createComponentForm(): ?Nette\ComponentModel\IComponent
	{
        $row = $this->orm->technologies->getById($this->technologyId);

		if (!$row) {
			throw new BadRequestException;
		}

        $stations = $this->orm->stations->findAll();
        $activeRelations = $this->orm->stationsTag->getBy(['technologyId' => $this->technologyId]);

       /* bd($activeRelation->technologyId);
        bd($activeRelation->id);
        bd($activeRelation->input);
        bd($activeRelation->createdAt);
        bd($activeRelation->station);*/



            bd($activeRelations->createdAt);
        bd($activeRelations->station);

        ......
	}

	/**
     * @throws Throwable
     */
    public function render(): void
    {
        $this->template->render(__DIR__ . '/EditTechnologyTemplate.latte');
    }
}


interface EditTechnologyFormFactory
{
    public function create(string $technologyId): EditTechnology;
}
