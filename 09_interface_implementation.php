<?php

interface IEnumLabel
{
    public function label(): string;
    public static function labels(): iterable;
}

enum StyleType: int implements IEnumLabel
{
    case Color = 1;
    case Font = 2;
    case Image = 3;

    public function label(): string
    {
        return self::labels()[$this->name];
    }

    public static function labels(): iterable
    {
        return [
            self::Color->name => 'color',
            self::Font->name => 'font',
            self::Image->name => 'image',
        ];
    }
}
