<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id
 * @property string $name
 * @property string $region
 * @property string $image
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'region', 'image'], 'required'],
            [['name', 'region', 'image'], 'string', 'max' => 255],
            [['image'],'file','extensions'=>['jpg','jpeg','png','svg']]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'region' => Yii::t('app', 'Region'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
    public function upload($file)
    {
       if ($file) {
        $dir = Yii::getAlias('@app') . "/web/uploads/partners/";
        $randomName = Yii::$app->security->generateRandomString();
        $image_name = $randomName . $file->extension;
        if ($file->saveAs($dir . $image_name)) {
            $this->image = $image_name;
        }
    }
}
}
