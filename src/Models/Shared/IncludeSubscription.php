<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


enum IncludeSubscription: string
{
    case NextTransaction = 'next_transaction';
    case RecurringTransactionDetails = 'recurring_transaction_details';
}
