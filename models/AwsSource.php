<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aws_source".
 *
 * @property string $name
 * @property string $root
 * @property string $region
 */
class AwsSource extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aws_source';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'region'], 'required'],
            [['name', 'root'], 'string', 'max' => 64],
            [['region'], 'string', 'max' => 32],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'root' => 'Root',
            'region' => 'Region',
        ];
    }
}
