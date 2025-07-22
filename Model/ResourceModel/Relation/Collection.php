<?php

namespace Jay\Alsoviewed\Model\ResourceModel\Relation;

class Collection extends \Jay\Alsoviewed\Model\ResourceModel\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'relation_id';

    protected function _construct()
    {
        $this->_init(
            'Jay\Alsoviewed\Model\Relation',
            'Jay\Alsoviewed\Model\ResourceModel\Relation'
        );
    }
}
