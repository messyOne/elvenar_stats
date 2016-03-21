<?php

namespace Index;

/**
 * Start Controller
 */
class Controller extends \Loo\Core\Controller
{
    /**
     * Just show index page
     */
    public function actionIndex()
    {
        $view = $this->getViewFactory()->getHtml();

        $this->setView($view);
    }
}
