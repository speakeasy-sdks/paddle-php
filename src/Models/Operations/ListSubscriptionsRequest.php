<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;

use \paddle\Paddle\Utils\SpeakeasyMetadata;
class ListSubscriptionsRequest
{
    /**
     * Return entities after the specified cursor. Used for working through paginated results.
     * 
     * @var ?string $after
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=after')]
    public ?string $after = null;
    
    /**
     * Return entities related to the specified customer. Use a comma separated list to specify multiple customer IDs.
     * 
     * @var ?string $customerId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=customer_id')]
    public ?string $customerId = null;
    
    /**
     * Order returned entities by the specified field and direction (`[ASC]` or `[DESC]`).
     * 
     * @var ?string $orderBy
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=order_by')]
    public ?string $orderBy = null;
    
    /**
     * Set how many entities are returned per page.
     * 
     * @var ?int $perPage
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=per_page')]
    public ?int $perPage = null;
    
    /**
     * Return entities related to the specified price. Use a comma separated list to specify multiple price IDs.
     * 
     * @var ?string $priceId
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=price_id')]
    public ?string $priceId = null;
    
    /**
     * Return entities that match the specified status. Use a comma separated list to specify multiple status values.
     * 
     * @var ?\paddle\Paddle\Models\Shared\StatusSubscription $status
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?\paddle\Paddle\Models\Shared\StatusSubscription $status = null;
    
	public function __construct()
	{
		$this->after = null;
		$this->customerId = null;
		$this->orderBy = null;
		$this->perPage = null;
		$this->priceId = null;
		$this->status = null;
	}
}
