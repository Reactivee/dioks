<?php

use yii\db\Migration;

/**
 * Class m231020_103348_long_transp
 */
class m231020_103348_long_transp extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%country}}', 'long', $this->string());
        $this->addColumn('{{%country}}', 'lat', $this->string());

        $this->createTable('{{%type_transport}}', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'image' => $this->string(),
            'desc_en' => $this->string(),
            'desc_ru' => $this->string(),
            'desc_uz' => $this->string(),
            'key' => $this->integer(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231020_103348_long_transp cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231020_103348_long_transp cannot be reverted.\n";

        return false;
    }
    */
}
