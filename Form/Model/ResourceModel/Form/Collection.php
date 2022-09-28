<?php

namespace Vivek\Form\Model\ResourceModel\Form;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct() 
    {
        $this->_init(\Vivek\Form\Model\Form::class, \Vivek\Form\Model\ResourceModel\Form::class);
    }
}
    