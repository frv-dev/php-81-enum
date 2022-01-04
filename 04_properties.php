<?php

enum StyleType: int
{
    case Color = 1;
    case Font = 2;
    case Image = 3;
}

// Get the case as a string.
// string(Color)
$value = StyleType::Color->name;

// Get the value, just avaiable with an type defined for enum.
// int(1)
$value = StyleType::Color->value;

// It's impossible to acquire any property by reference for security reasons.
$value = &StyleType::Color->name; // ERROR
$value = &StyleType::Color->value; // ERROR
