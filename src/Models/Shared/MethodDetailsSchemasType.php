<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** Type of credit or debit card used to pay. */
enum MethodDetailsSchemasType: string
{
    case Visa = 'visa';
    case Mastercard = 'mastercard';
    case Maestro = 'maestro';
    case AmericanExpress = 'american_express';
    case Discover = 'discover';
    case DinersClub = 'diners_club';
    case Jcb = 'jcb';
    case UnionPay = 'union_pay';
    case Mada = 'mada';
    case Unknown = 'unknown';
}
