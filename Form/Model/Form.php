<?php

namespace Vivek\Form\Model;

use Magento\Framework\Model\AbstractModel;
use Vivek\Form\Model\ResourceModel\Form as ResourceModel;

class Form extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
