<?php

namespace Ddd\Application\Notification;

interface PublishedMessageTracker
{
    /**
     * @param $aTypeName
     * @return int
     */
    public function mostRecentPublishedMessageId($aTypeName);

    /**
     * @param $aTypeName
     * @param \Ddd\Domain\Event\StoredEvent $notification
     */
    public function trackMostRecentPublishedMessage($aTypeName, $notification);
}
