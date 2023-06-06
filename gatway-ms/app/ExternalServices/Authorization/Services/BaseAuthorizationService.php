<?php

namespace App\ExternalServices\Authorization\Services;

use App\ExternalServices\Contracts\Services\BaseApiService;
use App\Http\Contracts\AuthorizationServiceInterface;

abstract class BaseAuthorizationService extends BaseApiService implements AuthorizationServiceInterface
{
    
    private $base_url;

    /**
     * BaseAuthorizationService constructor.
     */
    public function __construct()
    {
        $this->base_url = config('services.ms_authorization.url') . '/api';
    }

    /**
     * @return string
     */
    abstract function baseServiceUrl();

    /**
     * @return string
     */
    protected function getFullServiceUrl()
    {
        return $this->base_url . '/' . $this->baseServiceUrl();
    }


    
}
