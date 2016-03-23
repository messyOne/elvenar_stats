<?php

namespace Data;

use Common\Controller\AbstractSession;
use Loo\Database\DatabaseFactory;
use Loo\Helper\Param;

/**
 * The data controller of the index page
 */
class Controller extends AbstractSession
{
    /**
     * Get all labels
     *
     * @throws \Loo\Exception\FieldAlreadyExistsException
     */
    public function actionGetLabels()
    {
        $view = $this->getViewFactory()->getJson();

        $stmt = (new DatabaseFactory())->getEntityManager()->getConnection()->executeQuery('
            SELECT DISTINCT date
            FROM points;
        ');

        $i = 0;
        foreach ($stmt->fetchAll() as $row) {
            $view->assignValue($i++, date('d.m.Y', $row['date']));
        }

        $this->setView($view);
    }

    /**
     * Get all points for a specific player
     *
     * @throws \Loo\Exception\FieldAlreadyExistsException
     */
    public function actionPoints() {
        $view = $this->getViewFactory()->getJson();
        $data = $this->getRequest()->getData();
        $user = Param::str($data, 'user');

        $stmt = (new DatabaseFactory())->getEntityManager()->getConnection()->executeQuery('
            SELECT DISTINCT points
            FROM points
            WHERE "user" = :user;
        ', [':user' => $user]);

        $i = 0;
        foreach ($stmt->fetchAll() as $row) {
            $view->assignValue($i++, $row['points']);
        }

        $this->setView($view);
    }
}
