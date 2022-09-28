<?php

namespace Vivek\Form\Api\Data;

interface ViewInterface
{
   

    const ID            = 'id';
    const NAME          = 'author_name';
    const EMAIL         = 'email';
    const DESC          = 'description';

    public function getId();

    public function getName();

    public function getEmail();

    public function getDesc();

    public function setId($id);

    public function setName($name);

    public function setEmail($email);

    public function setDesc($desc);
}
