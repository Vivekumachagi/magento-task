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

        $info = $this->getRequest()->getParams();
        $name=$info['author_name'];
        $email=$info['email'];
        $desc=$info['description'];

        $savedata = $this->data;
        $savedata->setName($name);
        $savedata->setEmail($email);
        $savedata->setDesc($desc);
      

        try {
            $this->Resource->save($savedata);
            $this->messageManager->addSuccessMessage("data saved successfully!");
            $this->messageManager->addSuccessMessage("Dilip BRO is super");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving data"));
        }

        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('form');
        return $redirect;
    }
}
