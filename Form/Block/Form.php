<?php

namespace Vivek\Form\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Vivek\Form\Model\ResourceModel\Form\CollectionFactory as ViewCollectionFactory;

class Form extends \Magento\Framework\View\Element\Template
{

   
    protected $_viewCollectionFactory = null;


    public function __construct(
        Context $context,
        ViewCollectionFactory $viewCollectionFactory,
        array $data = []
    ) {
        $this->_viewCollectionFactory  = $viewCollectionFactory;
        parent::__construct($context, $data);
    }


    public function getCollection()
    {
        // $val = $this->getId();
        $viewCollection = $this->_viewCollectionFactory->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }



    public function getAddCarPostUrl() {
        return $this->getUrl('form/data/add');
    }
}
