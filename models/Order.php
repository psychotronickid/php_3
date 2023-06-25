<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $customer_name
 * @property string $product_description
 * @property string $service_type
 * @property string $order_date
 * @property int $service_cost
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_name', 'product_description', 'service_type', 'order_date', 'service_cost'], 'required'],
            [['order_date'], 'safe'],
            [['service_cost'], 'integer'],
            [['customer_name', 'product_description', 'service_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_name' => 'Customer Name',
            'product_description' => 'Product Description',
            'service_type' => 'Service Type',
            'order_date' => 'Order Date',
            'service_cost' => 'Service Cost',
        ];
    }
}
