<?php

/** @var $model \common\models\Video */
/** @var $similarVideos \common\models\Video[] */

use common\helpers\Html as HelpersHtml;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

?>
<div class="row">
    <div class="col-sm-8">
        <div class="ratio ratio-16x9">
            <video poster="<?php echo $model->getThumbnailLink() ?>" src="<?php echo $model->getVideoLink() ?>" controls></video>
        </div>
        <h6 class="mt-2"><?php echo $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <?php echo $model->getViews()->count() ?> views .
                <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
            </div>
            <div>
                <?php Pjax::begin() ?>
                <?php echo $this->render('_buttons', [
                    'model' => $model,
                ]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
        <div>
            <p><?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
            </p>
            <?php echo Html::encode($model->description) ?>
        </div>
    </div>

    <!-- <div class="col-sm-4">
        <?php foreach ($similarVideos as $similarVideo): ?>
            <div class="media">
                <div class="embed-responsive embed-responsive-16by9"></div>
                <video class="embed-responsive-item"
                    poster="<?php echo $model->getThumbnailLink() ?>"
                    src="<?php echo $model->getVideoLink() ?>" controls></video>

            </div>
            <div class="media-body">
                <h6 class="mt-0"><?php echo $model->title ?></h6>
                <div class="text-muted">
                    <p class="m-0">
                        <?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
                    </p>
                    <p>
                        <?php echo $model->getViews()->count() ?> views .
                        <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
                    </p>
                </div>
            </div>

    </div>
<?php endforeach; ?>
</div> -->
    <div class="col-sm-4">
        <?php foreach ($similarVideos as $similarVideo): ?>
            <div class="d-flex mb-3">
                <!-- Video Thumbnail -->
                <div class="flex-shrink-0 me-2" style="width: 120px;">
                    <a href="<?php echo Url::to(['/video/view', 'id' => $similarVideo->video_id]) ?>">
                        <div class="ratio ratio-16x9">
                            <video class="w-100"
                                poster="<?php echo $similarVideo->getThumbnailLink() ?>"
                                src="<?php echo $similarVideo->getVideoLink() ?>"></video>
                        </div>
                    </a>
                </div>

                <!-- Video Details -->
                <div class="flex-grow-1">
                    <h6 class="mt-0 text-truncate"><?php echo $similarVideo->title ?></h6>
                    <div class="text-muted small">
                        <p class="m-0 text-truncate">
                            <?php echo \common\helpers\Html::channelLink($similarVideo->createdBy) ?>
                        </p>
                        <small>
                            <p class="m-0">
                                <?php echo $similarVideo->getViews()->count() ?> views &bull;
                                <?php echo Yii::$app->formatter->asRelativeTime($similarVideo->created_at) ?>
                            </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>