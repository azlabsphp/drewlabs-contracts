<?php

declare(strict_types=1);

/*
 * This file is part of the Drewlabs package.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\Observable;

/**
 * @deprecated 2.0.0 use {\Drewlabs\Contracts\Observable\Producer} instead
 */
interface IEvent extends \SplSubject
{
    /**
     * Register a new Observer to the Event.
     *
     * @param \SplObserver|\SplObserver[] $observer
     *
     * @return static
     */
    public function subscribe($observer);

    /**
     * Unsubscribe a new Observer from the Event.
     *
     * @return static
     */
    public function unsubscribe(\SplObserver $observer);

    /**
     * Notify Observer(s) about event.
     *
     * @param mixed|null $data
     *
     * @return void
     */
    public function fire($data = null);
}
