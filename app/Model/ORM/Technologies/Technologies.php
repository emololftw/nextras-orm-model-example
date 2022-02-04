<?php

declare(strict_types=1);

namespace App\Model\Database;

use App\Model\Monitoring\EType;
use App\Model\Technologies\ETechnologySetupType;
use Contributte\Translation\Translator;
use DateTimeImmutable;
use Nette\Utils\ArrayHash;


/**
 * @property string $id {primary}
 * @property float $sequence
 * @property string|NULL $name
 * @property string|NULL $manipulationType {enum self::MANIPULATION_TYPE_*}
 * @property string $manipulationSign {default self::MANIPULATION_SIGN_PLUS} {enum self::MANIPULATION_SIGN_*}
 * @property float $manipulation {default 300}
 * @property int $targetCtCut
 * @property float $targetCt
 * @property float $targetAvailability {default 60}
 * @property float $targetEfficiency {default 60}
 * @property float $targetClose {default 5}
 * @property int $pcsCountable {default 4}
 * @property DateTimeImmutable $updateAt {default now}
 * @property DateTimeImmutable $createdAt {default now}
 * @property int $visibility
 * @property string $mode {default self::MODE_SINGLE} {enum self::MODE_*}
 * @property string $color {default '#000000'}
 * @property string $setupType {default self::SETUPTYPE_AUTOMATIC} {enum self::SETUPTYPE_*}
 * @property int $setupFulltime
 */
class Technologies extends AbstractEntity
{
    public const MANIPULATION_TYPE_MEDIAN = 'MEDIAN';
    public const MANIPULATION_TYPE_AVERAGE = 'AVERAGE';
    public const MANIPULATION_SIGN_PLUS = 'PLUS';
    public const MANIPULATION_SIGN_MULTIPLY = 'MULTIPLY';
    public const MODE_SINGLE = 'SINGLE';
    public const MODE_DOUBLE = 'DOUBLE';
    public const SETUPTYPE_AUTOMATIC = 'AUTOMATIC';
    public const SETUPTYPE_DECISION = 'DECISION';
    public const SETUPTYPE_DEFINED = 'DEFINED';

    private Translator $translator;

    public function injectTranslator(Translator $translator)
    {
        $this->translator = $translator;
    }

    public function getName(): null|string
    {
        return $this->name ?? $this->translator->translate('ui.w.undefined');;
    }

    public function getId(): string {
        return $this->id;
    }

    public function hasName(): bool {
        return !($this->name === null);
    }

    public function hasFulltime(): bool {
        return $this->setupFulltime === 1;
    }

    public function getManipulation(): float {
        return $this->manipulation;
    }

    public function getFormulaEfficiency(): ArrayHash {
        return ArrayHash::from([
            'type' => $this->setupType,
            'fulltime' => $this->hasFulltime()
        ]);
    }

    public function isTrimmed(): bool {
        return $this->targetCtCut === 1;
    }

    public function getTargetAvailability(): float {
        return $this->targetAvailability;
    }

    public function getTargetEfficiency(): float {
        return $this->targetEfficiency;
    }

    public function getTargetClose(): float {
        return $this->targetClose;
    }

    public function getTargetCT(): float {
        return $this->targetCt;
    }

    public function isVisible(): bool {
        return $this->visibility === 1;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getUpdate(): DateTimeImmutable
    {
        return $this->updateAt;
    }

    public function getMode(): EType
    {
        return EType::from($this->mode);
    }

    public function getSetupType(): ETechnologySetupType {
        return ETechnologySetupType::from($this->setupType);
    }
}
