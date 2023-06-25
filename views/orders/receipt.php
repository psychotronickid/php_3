<?php
use yii\helpers\Html;
?>
<h1>Квитанция</h1>
<p>Имя владельца: <?= Html::encode($order->customer_name) ?></p>
<p>Описание изделия: <?= Html::encode($order->product_description) ?></p>
<p>Вид услуги: <?= Html::encode($order->service_type) ?></p>
<p>Дата приема заказа: <?= Html::encode($order->order_date) ?></p>
<p>Стоимость услуги: <?= Html::encode($order->service_cost) ?></p>