<?php
namespace Ebay\Selling\Account;

use \Ebay\BaseClient as Client;

class SalesTax extends Client
{
	protected function makeRequest($method, $uri='', $data=[])
	{
		$uri = '' . $uri;
		return parent::makeRequest($method, $uri, $data);
	}
}