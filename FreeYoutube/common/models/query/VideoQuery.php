<?php

namespace common\models\query;

use yii\db\ActiveQuery;
use common\models\Video;

/**
 * This is the ActiveQuery class for [[\common\models\Video]].
 *
 * @see \common\models\Video
 */
class VideoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Video[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Video|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function creator($userId)
    {
        return $this->andwhere(['created_by' => $userId]);
    }

    public function latest()
    {
        return $this->orderBy(['created_at' => SORT_DESC]);
    }

    public function published()
    {
        return $this->andwhere(['status' => Video::STATUS_PUBLISHED]);
    }

    public function byKeyword($keyword)
    {
        return $this->andwhere("MATCH(title, description, tags)
        AGAINST (:keyword)", ['keyword' => $keyword]);
    }
}
