<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Depok</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/icon" href="<?= base_url('assets/logo/favicon.png')?>"/> 

</head>
<body>
    <div class="container">
        <div class="card m-auto" style="width: 30rem;height:85%;">
            <img class="card-img-top" src="<?= base_url('assets/images/gallary/g1.jpg')?>" alt="Card image cap">
            <div class="card-body single-package-item-txt">
                <h3 class="card-title"><?= $detail->nama;?></h3>
                <h5>Tiket Masuk = Rp.<?= $detail->harga_tiket; ?>/orang</h5>
                <p class="card-text"><?= $detail->alamat; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Kecamatan <?= $detail->kecamatan_id = "Beji";?></li>
                <li class="list-group-item"><?= $detail->fasilitas;?></li>
                <li class="list-group-item">Rating <?= $detail->skor_rating;?></li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link"><?= $detail->website;?></a>
            </div>
        </div>
    </div>
</body>
</html>							




