<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\TelephoneCompany;    

/* @var $this yii\web\View */
/* @var $model common\models\Partners */
/* @var $form yii\widgets\ActiveForm */
$region_list = ArrayHelper::map(TelephoneCompany::find()->all(), 'region', 'region');
?>

<div class="partners-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row flex-column">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'region')->dropDownList($region_list, ['prompt' => 'Выберите регион']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'image')->fileInput() ?>
        </div>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>




    <?php ActiveForm::end(); ?>

</div>