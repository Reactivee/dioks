<?php

use yii\db\Migration;

/**
 * Class m231026_080347_add_comment
 */
class m231026_080347_add_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'additional', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231026_080347_add_comment cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231026_080347_add_comment cannot be reverted.\n";

        return false;
    }
    */
}
