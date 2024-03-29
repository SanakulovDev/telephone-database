<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TelephoneTypes */

$this->title = Yii::t('app', 'Create Telephone Types');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Telephone Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telephone-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
