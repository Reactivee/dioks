<?php

use yii\db\Migration;

/**
 * Class m231014_125217_order_code
 */
class m231014_125217_order_code extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'order_code', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231014_125217_order_code cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231014_125217_order_code cannot be reverted.\n";

        return false;
    }
    */
}
