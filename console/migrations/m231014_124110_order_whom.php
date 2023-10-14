<?php

use yii\db\Migration;

/**
 * Class m231014_124110_order_whom
 */
class m231014_124110_order_whom extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'whom', $this->string());
        $this->addColumn('{{%order}}', 'how', $this->string());
        $this->addColumn('{{%order}}', 'mass', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231014_124110_order_whom cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231014_124110_order_whom cannot be reverted.\n";

        return false;
    }
    */
}
