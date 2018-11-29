<?php

use yii\db\Migration;

/**
 * Class m181128_113922_create_aws_sources
 */
class m181128_113922_create_aws_sources extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181128_113922_create_aws_sources cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_113922_create_aws_sources cannot be reverted.\n";

        return false;
    }
    */
}
