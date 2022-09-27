<?php

namespace Vivek\Form\Block;

use Magento\Framework\View\Element\Template;
use Vivek\Form\Model\ResourceModel\Form\Collection;

class Form extends Template
{
    
    private $collection;


    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAlldata() {
        return $this->collection;
    }

    public function getAddCarPostUrl() {
        return $this->getUrl('form/data/add');
    }

  
}
