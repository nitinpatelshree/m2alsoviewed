<?php

namespace Jay\Alsoviewed\Model\ResourceModel\Log;

class Collection extends \Jay\Alsoviewed\Model\ResourceModel\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Magento\Framework\DataObject', 'Jay\Alsoviewed\Model\ResourceModel\Log');
    }
}
