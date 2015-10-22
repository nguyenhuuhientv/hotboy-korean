<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phanloai".
 *
 * @property string $id
 * @property string $TenPhanLoai
 */
class Phanloai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phanloai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenPhanLoai'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'TenPhanLoai' => 'Ten Phan Loai',
        ];
    }
}
