<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
    }

    public function indexAction()
    {
        $u = new MR\Entity\User();
	var_dump($u);
    }


}

