<?php

namespace Admin;

use Common\Controller\AbstractSession;
use Common\Settings;
use Loo\Database\DatabaseFactory;

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

        if (isset($_POST['submit']) && (isset($_SESSION['logged_in']) || $_POST['password'] == Settings::getPassword())) {
            $_SESSION['logged_in'] = true;

            $sql = '
                INSERT INTO points (date, "user", points) 
                VALUES (:date, :user, :points)
                ON CONFLICT (date, "user")
                DO UPDATE SET points = EXCLUDED.points
            ';
            $stmt = (new DatabaseFactory())->getEntityManager()->getConnection()->prepare($sql);

            $date = strtotime('today midnight');
            foreach ($_POST as $user => $points) {
                if (strpos($user, 'user-') !== false) {
                    $stmt->execute([
                        ':date' => $date,
                        ':user' => $user,
                        ':points' => $points,
                    ]);
                }
            }
        }

        $this->setView($view);
    }
}
