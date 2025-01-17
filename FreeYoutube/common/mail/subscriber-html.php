<?php

/**@var $channel \common\models\User */

use common\helpers\Html;

/**@var $user \common\models\User */
?>

<p>Hello <?php echo $channel->username ?></p>
<p>User <?php echo Html::channelLink($user, true) ?>
    has subscribed to you</p>

<p>FreeYoutube team</p>