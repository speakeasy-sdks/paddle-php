<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;

use \paddle\Paddle\Utils\SpeakeasyMetadata;
class ListCustomersRequest
{
    /**
     * Return entities after the specified cursor. Used for working through paginated results.
     * 
     * @var ?string $after
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=after')]
    public ?string $after = null;
    
    /**
     * Return only the IDs specified. Use a comma separated list to get multiple entities.
     * 
     * @var ?string $id
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=id')]
    public ?string $id = null;
    
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
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=search')]
    public ?string $search = null;
    
    /**
     * Return entities that match the specified status. Use a comma separated list to specify multiple status values.
     * 
     * @var ?\paddle\Paddle\Models\Shared\Status $status
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?\paddle\Paddle\Models\Shared\Status $status = null;
    
	public function __construct()
	{
		$this->after = null;
		$this->id = null;
		$this->orderBy = null;
		$this->perPage = null;
		$this->search = null;
		$this->status = null;
	}
}
