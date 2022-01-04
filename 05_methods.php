<?php

// Can't be adquired by reference.

enum StyleType: int
{
    case Color = 1;
    case Font = 2;
    case Image = 3;
}

// Get enum as array.
$value = StyleType::cases();
var_dump($value);

// Just for enum with type, launch an ValueError with an invalid value.
$value = StyleType::from(2);
var_dump($value);

// Just for enum with type, return null for invalid type.
$value = StyleType::tryFrom(2);
var_dump($value);
$value = StyleType::tryFrom(4);
var_dump($value);

// And ... yes, you can access methods from objects, why? I don't know, maybe is because the PHP allow.
$value = StyleType::Color->tryFrom(3);
var_dump($value); // Is equal enum(StyleType::Image), why? I don't know.
