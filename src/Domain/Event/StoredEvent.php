<?php

namespace Ddd\Domain\Event;

use Ddd\Domain\DomainEvent;

class StoredEvent implements DomainEvent
{
    /**
     * @var int
     */
    private int $eventId;

    /**
     * @var string
     */
    private string $eventBody;

    /**
     * @var \DateTime
     */
    private \DateTime $occurredOn;

    /**
     * @var string
     */
    private string $typeName;

    /**
     * @param  string  $aTypeName
     * @param  \DateTime  $anOccurredOn
     * @param  string  $anEventBody
     */
    public function __construct(string $aTypeName, \DateTime $anOccurredOn, string $anEventBody)
    {
        $this->eventBody = $anEventBody;
        $this->typeName = $aTypeName;
        $this->occurredOn = $anOccurredOn;
    }

    /**
     * @return string
     */
    public function eventBody(): string
    {
        return $this->eventBody;
    }

    /**
     * @return int
     */
    public function eventId(): int
    {
        return $this->eventId;
    }

    /**
     * @return string
     */
    public function typeName(): string
    {
        return $this->typeName;
    }

    /**
     * @return \DateTime
     */
    public function occurredOn(): \DateTime
    {
        return $this->occurredOn;
    }
}
