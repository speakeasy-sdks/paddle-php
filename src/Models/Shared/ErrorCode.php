<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** Reason why a payment attempt failed. `null` if payment captured successfully. */
enum ErrorCode: string
{
    case Unknown = 'unknown';
    case AlreadyCanceled = 'already_canceled';
    case AlreadyRefunded = 'already_refunded';
    case AuthenticationFailed = 'authentication_failed';
    case BlockedCard = 'blocked_card';
    case Canceled = 'canceled';
    case Declined = 'declined';
    case ExpiredCard = 'expired_card';
    case Fraud = 'fraud';
    case SystemError = 'system_error';
    case InvalidAmount = 'invalid_amount';
    case IssuerUnavailable = 'issuer_unavailable';
    case InvalidPaymentDetails = 'invalid_payment_details';
    case NotEnoughBalance = 'not_enough_balance';
    case PspError = 'psp_error';
    case RedactedPaymentMethod = 'redacted_payment_method';
    case TransactionNotPermitted = 'transaction_not_permitted';
}