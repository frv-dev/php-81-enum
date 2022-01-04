<?php

// Automatically implements UnitEnum interface

enum StyleType
{
    case Color;
    case Font;
    case Image;
}

/**
 * PHP documentation with the diferences between enum and classes: https://www.php.net/manual/pt_BR/language.enumerations.object-differences.php
 * Simple table in https://php.watch/versions/8.1/enums#class-vs-enums
 */

echo "Style Type - Color = ";
var_dump(StyleType::Color);

echo ".Style Type - Font = ";
var_dump(StyleType::Font);

echo "Style Type - Image = ";
var_dump(StyleType::Image);

echo "\n";

// Is an object of StyleType
echo "..........................Type of an case = ";
var_dump(gettype(StyleType::Color));

echo "................Origin class for the case = ";
var_dump(get_class(StyleType::Color));

echo "...........Is it an instanceof the class? = ";
var_dump(StyleType::Color instanceof StyleType);

echo "..Is it an instanceof the base interface? = ";
var_dump(StyleType::Color instanceof UnitEnum);

echo "Is it an instanceof the backed interface? = ";
var_dump(StyleType::Color instanceof BackedEnum);

// Enum produces a singleton object so you can compare two object.
echo "..........................Comparing enums = ";
var_dump(StyleType::Color === StyleType::Color);

// Can be serialized and unserialized.
echo "..............................Serializing = ";
var_dump(serialize(StyleType::Color));


echo "............................Unserializing = ";
var_dump(unserialize(serialize(StyleType::Color)));

// Result = StyleType is like a class and can be used like a class (including namespaces).
// Result = Any case of StyleType is like an object of the class.
// Let's say that enum is like an interface, an derivation of a class.
