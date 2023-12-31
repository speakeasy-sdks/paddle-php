<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


/** The status of the transaction itself. This field can be updated via a `PATCH` but you can only set a transaction to be `billed` or `canceled` manually. All other statuses are automatic. */
enum Status: string
{
    case Draft = 'draft';
    case Ready = 'ready';
    case Billed = 'billed';
    case Completed = 'completed';
    case Canceled = 'canceled';
    case PastDue = 'past_due';
}
