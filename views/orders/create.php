<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
    <h1>Новая заявка</h1>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($order, 'customer_name')->textInput() ?>
<?= $form->field($order, 'product_description')->textInput(['maxlength' => true]) ?>
<?= $form->field($order, 'service_type')->dropDownList(['Dry cleaning' => 'Dry cleaning', 'Washing' => 'Washing']) ?>
<?= $form->field($order, 'order_date')->textInput() ?>
<?= $form->field($order, 'service_cost')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>