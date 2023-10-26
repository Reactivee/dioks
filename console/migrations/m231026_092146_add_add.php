<?php

use yii\db\Migration;

/**
 * Class m231026_092146_add_add
 */
class m231026_092146_add_add extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'additional_from', $this->string());
        $this->addColumn('{{%order}}', 'additional_to', $this->string());
        $this->dropColumn('{{%order}}', 'additional');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231026_092146_add_add cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231026_092146_add_add cannot be reverted.\n";

        return false;
    }
    */
}
