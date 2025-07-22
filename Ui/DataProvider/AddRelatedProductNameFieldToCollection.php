<?php

namespace Jay\Alsoviewed\Ui\DataProvider;

use Magento\Framework\Data\Collection;
use Magento\Ui\DataProvider\AddFieldToCollectionInterface;

class AddRelatedProductNameFieldToCollection implements AddFieldToCollectionInterface
{
    public function addField(Collection $collection, $field, $alias = null)
    {
        /** @var \Jay\Alsoviewed\Model\ResourceModel\Collection\AbstractCollection $collection */
        $collection->addRelatedProductNameToSelect();
    }
}
