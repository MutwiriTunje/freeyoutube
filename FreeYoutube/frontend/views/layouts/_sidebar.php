<?php

?>

<aside class="shadow">
    <?php echo \yii\bootstrap5\Nav::widget([
        'options' => [
            'class' => 'd-flex flex-column nav-pills'
        ],
        'items' => [
            [
                'label' => 'Home',
                'url' => ['/video/index'],
                'options' => ['class' => 'active'],
            ],
            [
                'label' => 'History',
                'url' => ['/video/history']
            ]
        ]
    ]) ?>
</aside>