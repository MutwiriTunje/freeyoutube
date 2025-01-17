<?php

/**@var $channel \common\models\User */

use common\helpers\Html;

/**@var $user \common\models\User */
?>

Hello <?php echo $channel->username ?>
User <?php echo Html::channelLink($user, true) ?>
has subscribed to you

FreeYoutube team