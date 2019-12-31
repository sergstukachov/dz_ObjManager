<?php

namespace Controller;

use Framework\Controller\AbstractController;
use Framework\Http\Request;
use Framework\View\PhpView;
use Model\User;
use ObjectManager\ObjectManager;

/**
 * Class Index
 * @package Controller
 */
class Index extends AbstractController
{
    /**
     * Index constructor.
     * @param Request $request
     * @param PhpView $view
     */
    public function __construct(Request $request,
                                PhpView $view)
    {
        parent::__construct($request, $view);
    }

    /**
     * @return string
     */
    public function index()
    {
        $objectManager = \ObjectManager\ObjectManager::getInstance();
        $user = $objectManager->create(User::class);
        return $this->view->generate('framework/index.phtml', ['content' => __METHOD__]);
    }
}