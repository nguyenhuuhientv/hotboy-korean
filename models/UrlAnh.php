<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "url_anh".
 *
 * @property string $id
 * @property integer $id_PhanLoai
 * @property string $URL
 */
class UrlAnh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'url_anh';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_PhanLoai'], 'required'],
            [['id_PhanLoai'], 'integer'],
            [['URL'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_PhanLoai' => 'Phân Loại',
            'URL' => 'Link Ảnh',
        ];
    }

    public function phanloai() {
        return $this->hasOne(Phanloai::className(), ['id' => 'id_PhanLoai']);
    }
}
