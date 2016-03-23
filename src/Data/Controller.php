<?php

namespace Data;

use Common\Controller\AbstractSession;
use Loo\Database\DatabaseFactory;

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
    public function actionLabels()
    {
        $view = $this->getViewFactory()->getJson();

        $stmt = (new DatabaseFactory())->getEntityManager()->getConnection()->executeQuery('
            SELECT DISTINCT date
            FROM points
            ORDER BY date;
        ');

        $i = 0;
        foreach ($stmt->fetchAll() as $row) {
            $view->assignValue($i++, date('d.m.Y', $row['date']));
        }

        $this->setView($view);
    }

    /**
     * Get all points
     *
     * @throws \Loo\Exception\FieldAlreadyExistsException
     */
    public function actionPoints() {
        $view = $this->getViewFactory()->getJson();

        $stmt = (new DatabaseFactory())->getEntityManager()->getConnection()->executeQuery('
            SELECT "user", points
            FROM points
            ORDER BY date
        ');

        $result = [];
        foreach ($stmt->fetchAll() as $row) {
            if (!isset($result[$row['user']])) {
                $result[$row['user']] = [];
            }

            $result[$row['user']][] = $row['points'];
        }

        $view->assign($result);

        $this->setView($view);
    }
}
