<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam".
 *
 * @property integer $id
 * @property string $title
 * @property string $file
 * @property string $is_top
 */
class Exam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['title','required'],
            [['title', 'file', 'is_top'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'file' => 'File',
            'is_top' => 'Is Top',
        ];
    }
}
