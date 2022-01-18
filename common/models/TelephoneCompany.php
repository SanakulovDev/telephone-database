<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "telephone_company".
 *
 * @property int $id
 * @property string $region
 * @property string $company_name
 */
class TelephoneCompany extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telephone_company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region', 'company_name'], 'required'],
            [['region', 'company_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'region' => Yii::t('app', 'Region'),
            'company_name' => Yii::t('app', 'Company Name'),
        ];
    }
}
