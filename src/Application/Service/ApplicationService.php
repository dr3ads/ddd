<?php

namespace Ddd\Application\Service;

/**
 * Interface ApplicationService
 * @package Ddd\Application\Service
 */
interface ApplicationService
{
    /**
     * @param  \Ddd\Application\Service\ServiceRequest|null  $request
     * @return mixed
     */
    public function execute(?ServiceRequest $request);
}
