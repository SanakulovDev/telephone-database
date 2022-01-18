<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TelephoneCompany */

$this->title = Yii::t('app', 'Create Telephone Company');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Telephone Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telephone-company-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
