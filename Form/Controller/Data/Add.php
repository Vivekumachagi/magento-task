<?php

namespace Vivek\Form\Controller\Data;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Vivek\Form\Model\Form;
use Vivek\Form\Model\ResourceModel\Form as Resource;

class Add extends Action
{

    private $data;
    private $Resource;


    public function __construct(
        Context $context,
        Form $data,
        Resource $Resource
    ) {
        parent::__construct($context);
        $this->data = $data;
        $this->Resource = $Resource;
    }

    public function execute()
    {

        $data = $this->getRequest()->getParams();
        $carModel = $this->data;
        $carModel->setData($data);

        try {
            $this->Resource->save($carModel);
            $this->messageManager->addSuccessMessage("data saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving data"));
        }

        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('form');
        return $redirect;
    }
}
