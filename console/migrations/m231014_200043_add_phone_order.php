<?php

use yii\db\Migration;

/**
 * Class m231014_200043_add_phone_order
 */
class m231014_200043_add_phone_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order_about}}', 'phone', $this->string());
        $this->addColumn('{{%order_about}}', 'email', $this->string());
        $this->addColumn('{{%order_about}}', 'cargo_type', $this->string());
        $this->addColumn('{{%order_about}}', 'cargo_from_location', $this->string());
        $this->addColumn('{{%order_about}}', 'cargo_to_location', $this->string());
        $this->addColumn('{{%order_about}}', 'currently_location', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231014_200043_add_phone_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231014_200043_add_phone_order cannot be reverted.\n";

        return false;
    }
    */
}
