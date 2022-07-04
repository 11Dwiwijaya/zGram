<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id_article
 * @property string $title
 * @property string $content
 * @property string $author
 * @property string $date
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'author', 'date'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['title', 'author'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_article' => 'Id Article',
            'title' => 'Title',
            'content' => 'Content',
            'author' => 'Author',
            'date' => 'Date',
        ];
    }
}
