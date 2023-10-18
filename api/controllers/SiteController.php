<?php

namespace api\controllers;

use Yii;
use yii\rest\Controller;
use api\models\LoginForm;

class SiteController extends Controller
{
    // rateLimiter - ограничение по запросам в секунду
    public function actionIndex()
    {
        return 'api';
    }

    public function actionLogin()
    {
        //if () {
        //    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        //} elseif () {
        //    Yii::$app->response->format = \yii\web\Response::FORMAT_XML;
        //}
        $model = new LoginForm();
        $model->load(Yii::$app->request->bodyParams, '');
        if ($token = $model->auth()) {
            return [
                'token' => $token->token,
                'expired' => date(DATE_RFC3339, $token->expired_at),
            ];
        } else {
            return $model;
        }
    }

    protected function verbs()
    {
        return [
            'login' => ['post'],
        ];
    }
}