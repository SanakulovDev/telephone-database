<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
?>
<div class="site-login">



    <div class="wrapper">
        <div class="logo"> 
            <i class="fas fa-users fa-4x text-primary"></i>
        </div>
        <div class="text-center mt-4 name"> Login  </div>
        <?php $form = ActiveForm::begin(['id' => 'login-form','options'=>['enctype'=>'multipart/form-data','class'=>'p-3 mt-3']]); ?>
        <div class="form-field d-flex align-items-center"> 
            <span class="far fa-user"></span> 
            <!-- <input type="text" name="userName" id="userName" placeholder="Username">  -->
            <?= $form->field($model, 'username')->label(false)->textInput(['type' => 'text','id'=>'userName','plaaceholder'=>'Username']) ?>
        </div>
        <div class="form-field d-flex align-items-center"> 
            <span class="fas fa-key"></span> 
            <!-- <input type="password" name="password" id="pwd" placeholder="Password">  -->
            <?= $form->field($model, 'password')->label(false)->passwordInput(['id'=>'pwd','plaaceholder'=>'Password']) ?>
        </div> 
       <div class="form-group mt-3">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>