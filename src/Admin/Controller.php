<?php

namespace Admin;

use Common\Controller\AbstractSession;

/**
 * The admin controller of the index page
 */
class Controller extends AbstractSession
{
    /**
     * @inheritdoc
     */
    public function initialize() {
        parent::initialize();

        session_set_cookie_params(3600*24*365);
    }


    /**
     * Just creates an empty html view to get the layout be rendered.
     */
    public function actionIndex()
    {
        $view = $this->getViewFactory()->getHtml('Admin/view');
        $view->setLayout('admin');

        $this->setView($view);
    }
}
