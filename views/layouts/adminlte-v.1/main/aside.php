<?php

use yii\helpers\Html;
use yii\helpers\Url;  ?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- search form -->
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->

    <?php if (Yii::$app->user->identity == null) : ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= Url::to(['site/index']) ?>">
            <i class="fa fa-home"></i> <span>Home</span>
        </li>

        <li class="">
          <?= Html::a('Home', ['site/index']) ?>
        </li>

        <li class="">
          <?= Html::a('About', ['site/about']) ?>
        </li>

        <li class="">
          <?= Html::a('Contact', ['site/contact']) ?>
        </li>

        <li class="">
          <?= Html::a('Login', ['site/login']) ?>
        </li>
      </ul>

    <?php elseif (Yii::$app->user->identity->roles == 1) : ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <?= Html::a('Home', ['site/index']) ?>
        </li>

        <li class="">
          <?= Html::a('Users', ['user/index']) ?>
        </li>

        <li class="">
          <?= Html::a('Articles', ['article/index']) ?>
        </li>

        <li>
          <?php
          Html::beginForm(['site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(

              'Logout (' . Yii::$app->user->identity->username . ')',
              ['class' => 'btn btn-danger btn-sm logout'],
              ['style' => 'text-align :right'],
            )
            . Html::endForm() ?>
        </li>
      </ul>

    <?php elseif (Yii::$app->user->identity->roles == 2) : ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="">
          <?= Html::a('Home', ['site/index']) ?>
        </li>

        <li class="">
          <?= Html::a('Articles', ['article/index']) ?>
        </li>

        <li class="">
          <?= Html::a('About', ['site/about']) ?>
        </li>

        <li class="">
          <?= Html::a('Contact', ['site/contact']) ?>
        </li>
      </ul>

    <?php endif; ?>
  </section>
  <!-- /.sidebar -->
</aside>