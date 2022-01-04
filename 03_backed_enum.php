<?php

// With types automaticaly implements the UnitEnum and the BackedEnum interface

// JUST INT OR STRING
// HAS FORCED STRICT_TYPES
enum StyleType: int
{
    case Color = 1;
    case Font = 2;
    case Image = 3;
}

echo "..Is it an instanceof the base interface? = ";
var_dump(StyleType::Color instanceof UnitEnum);

echo "Is it an instanceof the backed interface? = ";
var_dump(StyleType::Color instanceof BackedEnum);
