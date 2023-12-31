<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


enum StatusNotification: string
{
    case Delivered = 'delivered';
    case Failed = 'failed';
    case NeedsRetry = 'needs_retry';
    case NotAttempted = 'not_attempted';
}
