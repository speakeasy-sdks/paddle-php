<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/** Tax category for this product. Used for charging the correct rate of tax. Selected tax category must be enabled on your Paddle account. */
enum TaxCategory1: string
{
    case DigitalGoods = 'digital-goods';
    case Ebooks = 'ebooks';
    case ImplementationServices = 'implementation-services';
    case ProfessionalServices = 'professional-services';
    case Saas = 'saas';
    case SoftwareProgrammingServices = 'software-programming-services';
    case Standard = 'standard';
    case TrainingServices = 'training-services';
    case WebsiteHosting = 'website-hosting';
}
