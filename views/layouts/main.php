<?php

/** @var yii\web\View $this */
/** @var string $content */

//use Yii;
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use app\models\User;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => 'zGram',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-light bg-light fixed-top',
            ],
        ]);

        // print(Yii::$app->user->identity->roles);
        if (Yii::$app->user->identity == null) :
            $items = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                // ['label' => 'Coba Form', 'url' => ['/site/coba']],
                ['label' => 'Login', 'url' => ['/site/login']]
            ];
        elseif (Yii::$app->user->identity->roles == 1) :
            $items = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'User', 'url' => ['/user/index']],
                ['label' => 'Article', 'url' => ['/article']],
                ('<li>'
                    . Html::beginForm(['site/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-danger btn-sm logout'],
                        ['style' => 'text-align :right'],
                    )
                    . Html::endForm()
                    . '</li>'
                )

            ];


        elseif (Yii::$app->user->identity->roles == 2) :
            $items = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Article', 'url' => ['/article']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                // ['label' => 'Coba Form', 'url' => ['/site/coba']],
                ('<li>'
                    . Html::beginForm(['site/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-danger btn-sm logout'],
                        ['style' => 'text-align :right'],
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ];

        endif;

        // if(Yii::$app->user->isGuest ?) :
        //     $login = ['label' => 'Login', 'url' => ['/site/login']];
        // elseif()

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav '],
            'items' =>
            $items,
            // ['label' => '|',],

            // ['label' => 'Home', 'url' => ['/site/index']],
            // ['label' => 'User', 'url' => ['/user/index']],
            // ['label' => 'Article', 'url' => ['/article']],
            // ['label' => 'About', 'url' => ['/site/about']],
            // ['label' => 'Contact', 'url' => ['/site/contact']],
            // ['label' => 'Coba Form', 'url' => ['/site/coba']],

            // Yii::$app->user->isGuest ?
            //     (['label' => 'Login', 'url' => ['/site/login']]) : ('<li>'
            //         . Html::beginForm(['site/logout'], 'post', ['class' => 'form-inline'])
            //         . Html::submitButton(
            //             'Logout (' . Yii::$app->user->identity->username . ')',
            //             ['class' => 'btn btn-danger btn-sm logout'],
            //             ['style' => 'text-align :right'],
            //         )
            //         . Html::endForm()
            //         . '</li>'
            //     )

            // ]
        ]);


        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; Dwi Company <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
            console.error(error);
        });
    </script>
    <!-- <script src="../assets/ckeditor5/ckeditor.js"></script> -->
</body>

</html>
<?php $this->endPage() ?>