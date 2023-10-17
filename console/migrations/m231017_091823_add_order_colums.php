<?php

use yii\db\Migration;

/**
 * Class m231017_091823_add_order_colums
 */
class m231017_091823_add_order_colums extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'phone', $this->string());
        $this->addColumn('{{%order}}', 'email', $this->string());
        $this->addColumn('{{%order}}', 'client_name', $this->string());
        $this->addColumn('{{%order}}', 'doc', $this->string());
        $this->addColumn('{{%order}}', 'updated_by', $this->integer());


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231017_091823_add_order_colums cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231017_091823_add_order_colums cannot be reverted.\n";

        return false;
    }
    */
}
