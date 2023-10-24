<?php

use yii\db\Migration;

/**
 * Class m231024_151831_user_language
 */
class m231024_151831_user_language extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'language', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231024_151831_user_language cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231024_151831_user_language cannot be reverted.\n";

        return false;
    }
    */
}
