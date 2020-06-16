<?php

namespace addons\Finance\merchant\modules\purchase\controllers;

use yii\web\Controller;

/**
 * Default controller for the `purchase` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}