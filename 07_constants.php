<?php

enum StyleType: int
{
    case Color = 1;
    case Font = 2;
    case Image = 3;

    public const COR = self::Color;
    private const FONTE = self::Font;

    // It's permitted, but it doesn't make sense
    // because inheritance isn't allowed.
    protected const IMAGEM = self::Image;
}
