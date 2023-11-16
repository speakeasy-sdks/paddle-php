<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** How payment is collected. `automatic` for checkout, `manual` for invoices. */
enum CollectionMode2: string
{
    case Automatic = 'automatic';
    case Manual = 'manual';
}
