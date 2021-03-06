<?php

namespace app\controllers;

use app\models\article;
use app\models\articleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use Yii;

/**
 * ArticleController implements the CRUD actions for article model.
 */
class ArticleController extends Controller
{
    /**
     * @inheritDoc
     */

    /**
     * Lists all article models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new articleSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single article model.
     * @param int $id_article Id Article
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionDetail($id)
    {
        return $this->render('detail', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new article();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', "Article created successfully.");
                return $this->redirect(['view', 'id_article' => $model->id_article]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_article Id Article
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', "Article edited successfully.");
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_article Id Article
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', "Article has been deleted.");
        return $this->redirect(['index']);
    }

    /**
     * Finds the article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_article Id Article
     * @return article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = article::findOne(['id_article' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
