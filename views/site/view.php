<main class="col-md-9 ms-sm-auto col-lg-10 mt-3 px-md-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="">Article</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $pegawai['title'] ?></li>
    </ol>
    <div class="card mt-3">
        <div class="card-header">Article</div>
        <div class="card-body">
            <h1><?= Yii::$app->article->identity->title ?></h1>
            <p><?= $pegawai['content'] ?></p>
            <br>
            <br>
            <hr>
            <p>Pembuat : <?= $pegawai['username'] ?></p>
            <p>tanggal dibuat : <?= $pegawai['date'] ?></p>

        </div>
    </div>
</main>