<?php

enum StyleType: int
{
    case Color = 1;
    case Font = 2;
    case Image = 3;
}

// Simple conversion
$value = StyleType::cases();
var_dump($value);

// Passing through an array map
$value = array_map(
    fn (StyleType $item) => $item->value,
    StyleType::cases()
);
var_dump($value);

// Passing through a foreach
$value = [];
foreach (StyleType::cases() as $item) {
    $value[] = $item->name;
}
var_dump($value);
