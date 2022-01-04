<?php

enum StyleType: int
{
    case Color = 1;
    case Font = 2;
    case Image = 3;

    public function ptBrName(): string
    {
        return self::ptBrNames()[$this->name];
    }

    public static function ptBrNames(): iterable
    {
        return [
            StyleType::Color->name => 'Cor',
            StyleType::Font->name => 'Fonte',
            StyleType::Image->name => 'Imagem'
        ];
    }
}

// Get an specific name in ptBR
$value = StyleType::Font->ptBrName();
var_dump($value);

// Get all names in ptBR
$value = StyleType::ptBrNames();
var_dump($value);
