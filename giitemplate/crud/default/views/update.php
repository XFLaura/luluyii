<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;
$urlParams = $generator->generateUrlParams();
echo "<?php\n";
?>
$this->title = <?= $generator->generateString('Update')?>.':'.$model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model-><?= $generator->getNameAttribute() ?>, 'url' => ['view', <?= $urlParams ?>]];
$this->params['breadcrumbs'][] = <?= $generator->generateString('Update') ?>;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-update">
    <?= "<?= " ?>$this->render('_form', ['model' => $model]) ?>
</div>
