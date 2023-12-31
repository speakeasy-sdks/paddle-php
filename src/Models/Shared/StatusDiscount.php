<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


enum StatusDiscount: string
{
    case Active = 'active';
    case Archived = 'archived';
    case Expired = 'expired';
    case Used = 'used';
}
