<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** Indicates what initiated this transaction. Read only for sellers - read/write for Paddle */
enum TransactionOrigin: string
{
    case Web = 'web';
    case Api = 'api';
    case SubscriptionRecurring = 'subscription_recurring';
    case SubscriptionUpdate = 'subscription_update';
    case SubscriptionCharge = 'subscription_charge';
    case SubscriptionPaymentMethodChange = 'subscription_payment_method_change';
}
