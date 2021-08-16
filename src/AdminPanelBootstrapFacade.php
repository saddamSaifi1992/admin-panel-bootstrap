<?php

namespace Saddamsaifi1992\AdminPanelBootstrap;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Saddamsaifi1992\AdminPanelBootstrap\Skeleton\SkeletonClass
 */
class AdminPanelBootstrapFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'admin-panel-bootstrap';
    }
}
