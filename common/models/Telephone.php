<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "telephone".
 *
 * @property int $id
 * @property int $type_id
 * @property int $company_id
 * @property string $name
 * @property int $amount
 * @property string $description
 * @property string $display_size
 * @property string $image
 */
class Telephone extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telephone';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id', 'company_id', 'name', 'amount', 'description', 'display_size', 'image'], 'required'],
            [['type_id', 'company_id', 'amount'], 'integer'],
            [['name', 'description', 'display_size', 'image'], 'string', 'max' => 255],
            [['image'],'file','skipOnEmpty'=>true,'extensions'=>['jpg','jpeg','png','svg'],'maxSize'=>1024*1024*2]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type_id' => Yii::t('app', 'Type ID'),
            'company_id' => Yii::t('app', 'Company ID'),
            'name' => Yii::t('app', 'Name'),
            'amount' => Yii::t('app', 'Amount'),
            'description' => Yii::t('app', 'Description'),
            'display_size' => Yii::t('app', 'Display Size'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
     public function upload($file)
    {
       if ($file) {
        $dir = Yii::getAlias('@backend') ."/web/uploads/partners/";
        $randomName = Yii::$app->security->generateRandomString();
        $image_name = $randomName .".". $file->extension;
        if(is_dir($dir))
            if ($file->saveAs($dir . $image_name)) {
                $this->image = $image_name;
                return true;
            }
            return false;
        }
    }
}
