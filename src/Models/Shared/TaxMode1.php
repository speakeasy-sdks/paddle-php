<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** How tax is calculated for this price. */
enum TaxMode1: string
{
    case AccountSetting = 'account_setting';
    case External = 'external';
    case Internal = 'internal';
}
