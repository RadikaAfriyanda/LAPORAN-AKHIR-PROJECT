<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
	<link rel="shortcut icon" type="image/icon" href="<?= base_url('assets/logo/favicon.png')?>"/> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
        body {
            background:rgb(235, 237, 237);
        }
        .wrapper {
            width: 500px;       
            border-radius: 18px 18px 18px 18px;   
            margin: 10% auto;
            padding: 20px;
            background:white;
            border: 2px solid rgba(179,220,237,1);
            box-shadow: 0px 6px 10px 0px rgba(179,220,237,1);
        }
        input{
            width: 100%;
            height: 40px;
            border: 10px solid rgba(179,220,237,1);
            padding: 5px;
        }
        .logo {
          width:10%;
        }
        
    </style>
</head>
<body>
    <div class="wrapper">
      <img class="logo rounded mx-auto d-block" src="<?= base_url('assets/logo/favicon.png')?>" alt="Gambar Tidak Tersedia">
      <h2 class="text-center pb-4">Login</h2>
          <?= form_open("login/auth")?>
            
            <div class="form-group row">
              <label for="username" class="col-4 col-form-label">Username</label> 
              <div class="col-8">
                <input id="username" name="username" type="text" class="form-control" required="required">
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-4 col-form-label">Password</label> 
              <div class="col-8">
                <input id="password" name="password" type="password" class="form-control" required="required">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <?= form_close() ?>
            <div class="form-group row">
              <div class="col-4"></div>
              <div class="col-8">
                <p>belum punya akun? <a href="<?= base_url('index.php/register') ?>">Daftar</a></p>
              </div>
            </div>
    </div>
</body>
</html>