<?php

namespace Jay\Alsoviewed\Model\Relation\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Status implements OptionSourceInterface
{
    /**
     * @var \Jay\Alsoviewed\Model\Relation
     */
    protected $relation;

    /**
     * Constructor
     *
     * @param \Jay\Alsoviewed\Model\Relation $relation
     */
    public function __construct(\Jay\Alsoviewed\Model\Relation $relation)
    {
        $this->relation = $relation;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->relation->getAvailableStatuses();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
