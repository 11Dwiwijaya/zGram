<?php

/** @var yii\web\View $this */

use yii\helpers\BaseUrl;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'zGram';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Welcome to zGram</h1>

        <p class="lead">wanna create some articles ?</p>

        <?= Html::a('Create one', ['article/create'], ['class' => 'btn btn-success']) ?>
    </div>

    <div class="body-content">

        <table id="myTable" class=" table ">
            <!-- <img src="../assets/final.png" alt="" srcset=""> -->
            <thead>
                <tr>
                    <th>articles . . . </th>
                    <th style="text-align: center; vertical-align: middle;"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($article as $p) :
                ?>
                    <tr>

                        <td><a href="<?= Url::to(['article/detail', 'id_article' => $p['id_article']]); ?>"><?= $p['title']; ?></a> </td>

                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</div>