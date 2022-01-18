<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\TelephoneCompany;
use common\models\TelephoneTypes;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Telephone */
/* @var $form yii\widgets\ActiveForm */
$types = ArrayHelper::map(TelephoneTypes::find()->all(),'id','name');
$companies = ArrayHelper::map(TelephoneCompany::find()->all(),'id','company_name');
?>

<div class="telephone-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_id')->dropDownList($types,['prompt'=>'Select as types']) ?>

    <?= $form->field($model, 'company_id')->dropDownList($companies,['prompt'=>'Select as companies']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput()?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
