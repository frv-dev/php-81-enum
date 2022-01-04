<?php

interface IEnumLabel
{
    public function label(): string;
    public static function labels(): iterable;
}

/**
 * @property string $name
 * @method static iterable labels()
 */
trait EnumLabel
{
    public function label(): string
    {
        return self::labels()[$this->name];
    }
}

// ==============================================
// ==============================================
// ==============================================

enum LiveStatus: int implements IEnumLabel
{
    use EnumLabel;

    case Active = 1;
    case Inactive = 2;

    public static function labels(): iterable
    {
        return [
            self::Active->name => 'active',
            self::Inactive->name => 'inactive',
        ];
    }
}

// ==============================================
// ==============================================
// ==============================================

class Live
{
    public function __construct(
        public string $title,
        public LiveStatus&UnitEnum&BackedEnum&IEnumLabel $status = LiveStatus::Active,
    ) {
    }

    public function getStatus(): string
    {
        return "The '{$this->title}' live is {$this->status->label()}";
    }
}

var_dump(
    (new Live('PHP 8.1 & Enums'))->getStatus()
);
