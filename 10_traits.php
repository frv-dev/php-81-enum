<?php

trait EnumLabel
{
    public function label(): string
    {
        return self::labels()[$this->name];
    }
}

enum StyleType: int
{
    use EnumLabel;

    case Color = 1;
    case Font = 2;
    case Image = 3;

    public static function labels(): iterable
    {
        return [
            self::Color->name => 'color',
            self::Font->name => 'font',
            self::Image->name => 'image',
        ];
    }
}
