<?php namespace Infusionsoft\Api\Rest;

use Infusionsoft\Api\Rest\Traits\CannotDelete;
use Infusionsoft\Api\Rest\Traits\CannotSync;

class CompanyService extends RestModel
{
	use CannotSync, CannotDelete;

	public $full_url = 'https://api.infusionsoft.com/crm/rest/v1/companies';
	public $return_key = 'companies';

}
