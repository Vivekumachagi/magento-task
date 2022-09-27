<?php
namespace Vivek\Form\Model\ResourceModel\Form;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vivek\Form\Model\Form as Model;
use Vivek\Form\Model\ResourceModel\Form as ResourceModel;

class Collection extends AbstractCollection
{

    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
        parent::_construct();
    }
}   