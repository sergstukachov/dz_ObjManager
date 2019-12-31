<?php

namespace Framework\Controller;

use Framework\Http\Request;
use Framework\View\PhpView;

class AbstractController
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var PhpView
     */
    protected $view;
    /**
     * @var \ObjectManager
     */
    protected $objectManager;

    public function __construct(Request $request, PhpView $view)
    {
        $this->request = $request;
        $this->view = $view;
    }

    /**
     * @return Request
     */
    protected function getRequest()
    {
        return $this->request;
    }

    /**
     * @return \ObjectManager|\ObjectManager\ObjectManagerInterface
     */
  /*  protected function getObjectManager()
    {
        return $this->objectManager= new \ObjectManager;
    }*/
}