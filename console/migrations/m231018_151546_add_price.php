<?php

use yii\db\Migration;

/**
 * Class m231018_151546_add_price
 */
class m231018_151546_add_price extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'price', $this->string());
        $this->addColumn('{{%order}}', 'code', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231018_151546_add_price cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231018_151546_add_price cannot be reverted.\n";

        return false;
    }
    */
}
