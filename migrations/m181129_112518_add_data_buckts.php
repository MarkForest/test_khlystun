<?php

use yii\db\Migration;

/**
 * Class m181129_112518_add_data_buckts
 */
class m181129_112518_add_data_buckts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //insert data for first bucket with list countries
        $sql = 'insert into aws_source (name, root, region) values(:name, :root, :region)';
        $prepareSt = $this->db->pdo->prepare($sql);
        $prepareSt->execute([
            'name'=>'countries.json',
            'root'=>'http://markforest.pro/www/aws/buketCountries/',
            'region'=>'Some Region'
        ]);
        //insert data for second bucket with list cities
        $prepareSt->execute([
            'name'=>'cities.json',
            'root'=>'http://markforest.pro/www/aws/buketCities/',
            'region'=>'Some Region'
        ]);
        //insert data for third bucket with list rates
        $prepareSt->execute([
            'name'=>'rates.json',
            'root'=>'http://markforest.pro/www/aws/bucketRates/',
            'region'=>'Some Region'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181129_112518_add_data_buckts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181129_112518_add_data_buckts cannot be reverted.\n";

        return false;
    }
    */
}
