<?php

/*
 * This file is part of Laravel Vimeo.
 *
 * (c) Vincent Klaiber <hello@vnclone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace vnclone\Vimeo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Vimeo facade class.
 *
 * @author Vincent Klaiber <hello@vnclone.com>
 */
class Vimeo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'vimeo';
    }
}
