<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** Status of this subscription. Set automatically by Paddle. Use the pause subscription or cancel subscription operations to change. */
enum SchemasstatusSubscription: string
{
    case Active = 'active';
    case Canceled = 'canceled';
    case PastDue = 'past_due';
    case Paused = 'paused';
    case Trialing = 'trialing';
}