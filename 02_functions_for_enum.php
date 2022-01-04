<?php

enum StyleType
{
    case Color;
    case Font;
    case Image;
}

var_dump(enum_exists('StyleType'));
var_dump(enum_exists('FakeStyleType'));
