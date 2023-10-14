<?php
    /** @var string $content */

use yii\bootstrap4\Breadcrumbs;

?>
<div class="content">
    <div class="container-fluid">
        <?php echo Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>

        <?= $content; ?>
    </div>
</div>