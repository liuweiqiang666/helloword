<?php

namespace app\models;

use Yii;
/**
 * This is the model class for table "php".
 *
 * @property integer $id
 * @property string $name
 * @property string $pwd
 */
class Php extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'php';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'pwd'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pwd' => 'Pwd',
        ];
    }
}
