<?php

use yii\helpers\html;
?>
<p>Kamu sudah submit form coba</p>
<p>Silahkan cek data :</p>
<hr>
<table>

    <tr>
        <td><b>Nama</b></td>
        <td>:</td>
        <td><?= Html::encode($model->name) ?></td>
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td>:</td>
        <td><?= Html::encode($model->email) ?></td>
    </tr>
</table>