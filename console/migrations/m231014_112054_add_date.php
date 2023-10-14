<?php

use yii\db\Migration;

/**
 * Class m231014_112054_add_date
 */
class m231014_112054_add_date extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'created_at', $this->string());
        $this->addColumn('{{%order}}', 'updated_at', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231014_112054_add_date cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231014_112054_add_date cannot be reverted.\n";

        return false;
    }
    */
}
