<?php

namespace app\controllers;

use app\models\NewsModel;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Pages;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;

class SiteController extends Controller
{
    public $layout = 'site';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
//    public function actionUpload(){
//        return $this->render('upload');
//    }
    public function actionIndex()
    {
//        return $this->render('index');
        $query = pages::find()->where(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>3]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
//        var_dump($pages);
        return $this->render('index', [
            'news' => $models,
            'pagination' => $pages,
        ]);
    }
    public function actionNews()
    {
//        return $this->render('index');
        $query = NewsModel::find()->where(['status' => 1])
        ->orderBy(['update_date'=>SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>9]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('news', [
            'news' => $models,
            'pagination' => $pages,
        ]);
    }
    public function actionMore($id = null)
    {
        $query = pages::find()->where(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>1,'pageSizeLimit'=>[1,3]]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit,['pageSize'=>3,'totalCount'=>3])
            ->all();

        if($id !=null){
            $model = Pages::find()->where(['id'=>$id])->one();
//            $this->render('more',$model);
            if($model==null)
        return $this->render('404');

            return $this->render('more',
                [
                    'model'=>$model,
                    'news' => $models,
                    'pagination' => $pages,
                ]);
        }
        else
        return $this->render('404');

    }

    public function actionSearch($key = null)
    {
        $dataProvider = false;
//        Yii::info($key, 'izlash');
        if ($key != null) {
            //            select * from like neme =
            $search_query = Pages::find()
                            ->where(['LIKE', 'name', $key])
                            ->orWhere(['LIKE', 'content', $key]);

            $dataProvider = new ActiveDataProvider([
                'query' => $search_query,
                'pagination' => [
                    'pageSize' => 2,
//                    'limit' => 3,
                ]
            ]);

           //Yii::info($search_query, 'search_result');
        }

        return $this->render('search', [
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionWidgets()
    {
        return $this->render('widgets');
    }

    public function actionChangeLang($lang_id)
    {
        Yii::$app->session->set('language', $lang_id);
        return $this->goHome();
    }

}
