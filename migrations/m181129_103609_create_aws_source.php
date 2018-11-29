<?php

use yii\db\Migration;

/**
 * Class m181129_103609_create_aws_source
 */
class m181129_103609_create_aws_source extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('aws_source', [
            'name'=>$this->string(64)->notNull(),
            'PRIMARY KEY(name)',
            'root'=>$this->string(64)->notNull()->defaultValue('/'),
            'region'=>$this->string(32)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('aws_source');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181129_103609_create_aws_source cannot be reverted.\n";

        return false;
    }
    */
}
