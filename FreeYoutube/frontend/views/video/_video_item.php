<?php

/** @var $model \common\models\Video */

use yii\helpers\Url;

?>

<div class="card m-3" style="width: 14rem;">
  <a href="<?php echo Url::to(['/video/view', 'id' => $model->video_id]) ?>">
    <div class="ratio ratio-16x9">
      <video poster="<?php echo $model->getThumbnailLink() ?>" src="<?php echo $model->getVideoLink() ?>"></video>
    </div>
  </a>
  <div class="card-bod p-2">
    <h6 class="card-title m-0"><?php echo $model->title ?></h6>
    <p class="text-muted card-text m-0">
      <?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
    </p>
    <p class="card-text m-0">
      <?php echo $model->getViews()->count() ?> views .
      <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
    </p>

  </div>
</div>