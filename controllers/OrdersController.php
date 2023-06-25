<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Order;

class OrdersController extends \yii\web\Controller {
    public function actionCreate() {
        $order = new Order; // создаем новый объект модели для формы добавления заявки
        if ($order->load(Yii::$app->request->post()) && $order->save()) {
            // сохраняем данные формы
            return $this->redirect(['print-receipt', 'id' => $order->id]);
        } else {
            // загружаем форму для создания заявки
            return $this->render('create', [
                'order' => $order,
            ]);
        }
    }

    public function actionPrintReceipt($id) {
        $order = Order::findOne($id); // получаем данные о заявке по id
        return $this->render('receipt', [
            'order' => $order,
        ]);
    }
}