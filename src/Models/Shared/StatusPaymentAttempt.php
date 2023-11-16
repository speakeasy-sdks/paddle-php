<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** Status of this payment attempt. */
enum StatusPaymentAttempt: string
{
    case Authorized = 'authorized';
    case AuthorizedFlagged = 'authorized_flagged';
    case Canceled = 'canceled';
    case Captured = 'captured';
    case Error = 'error';
    case ActionRequired = 'action_required';
    case PendingNoActionRequired = 'pending_no_action_required';
    case Created = 'created';
    case Unknown = 'unknown';
    case Dropped = 'dropped';
}
