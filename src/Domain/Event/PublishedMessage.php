<?php

namespace Ddd\Domain\Event;

class PublishedMessage
{
    /**
     * @var int
     */
    private int $mostRecentPublishedMessageId;

    /**
     * @var int
     */
    private int $trackerId;

    /**
     * @var string
     */
    private string $typeName;

    /**
     * @param string $aTypeName
     * @param int $aMostRecentPublishedMessageId
     */
    public function __construct(string $aTypeName, int $aMostRecentPublishedMessageId)
    {
        $this->mostRecentPublishedMessageId = $aMostRecentPublishedMessageId;
        $this->typeName = $aTypeName;
    }

    /**
     * @return int
     */
    public function mostRecentPublishedMessageId(): int
    {
        return $this->mostRecentPublishedMessageId;
    }

    /**
     * @param int $maxId
     */
    public function updateMostRecentPublishedMessageId(int $maxId)
    {
        $this->mostRecentPublishedMessageId = $maxId;
    }

    /**
     * @return int
     */
    public function trackerId()
    {
        return $this->trackerId;
    }
}
