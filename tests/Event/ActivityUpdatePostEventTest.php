<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Tests\Event;

use App\Entity\Activity;
use App\Event\AbstractActivityEvent;
use App\Event\ActivityUpdatePostEvent;

/**
 * @covers \App\Event\AbstractActivityEvent
 * @covers \App\Event\ActivityUpdatePostEvent
 */
class ActivityUpdatePostEventTest extends AbstractActivityEventTestCase
{
    protected function createActivityEvent(Activity $activity): AbstractActivityEvent
    {
        return new ActivityUpdatePostEvent($activity);
    }
}
