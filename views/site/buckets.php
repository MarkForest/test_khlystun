<?php

use yii\helpers\Html;

?>


<?= HTML::beginForm('buckets', 'post', ['class'=>'form col-md-4 col-md-offset-4'])?>
    <?php if ($content):?>
        <div class="form-group">
            <?= HTML::textarea('content', $content, $items, ['class'=>'form-control']);?>
        </div>
    <?php endif;?>
    <div class="form-group">
        <?= HTML::dropDownList('bucket', '0', $items, ['class'=>'form-control']);?>
    </div>
    <div class="form-group">
        <div class="form-inline">
            <?= HTML::submitButton('Set Content', ['class'=>'btn btn-success', 'name'=>'setContent'])?>
            <?= HTML::submitButton('Get Content', ['class'=>'btn btn-primary', 'name'=>'getContent'])?>
        </div>
    </div>
<?= HTML::endForm()?>
