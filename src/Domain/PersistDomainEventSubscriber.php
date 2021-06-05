<?php

namespace Ddd\Domain;

use Ddd\Application\EventStore;
use Ddd\Domain\Event\PublishableDomainEvent;

class PersistDomainEventSubscriber implements DomainEventSubscriber
{
    /**
     * @var EventStore
     */
    private EventStore $eventStore;

    public function __construct($anEventStore)
    {
        $this->eventStore = $anEventStore;
    }

    public function handle($aDomainEvent)
    {
        $this->eventStore->append($aDomainEvent);
    }

    /**
     * @param  \Ddd\Domain\DomainEvent  $aDomainEvent
     * @return bool
     */
    public function isSubscribedTo(DomainEvent $aDomainEvent): bool
    {
        return $aDomainEvent instanceof PublishableDomainEvent;
    }
}
