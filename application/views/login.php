<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/hpai.png" /> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background: #f5f5f5; font-style: arial, helvetica, sans-serif;">
    <form action="<?= site_url('Login/signin'); ?>" method="post">
    <div class="d-flex justify-content-center">
        <div class="card log">
            <div class="card-body">
                <div class="text-center">
                <img src="assets/img/hpai.png" alt="">
                </div><br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user" style="color: #1d7835;"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username">
                </div>
				<div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock" style="color: #1d7835;"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="pass" aria-label="Password">
                    <span class="input-group-text" id="mybutton" onclick="change()" style="background: white;"><i class="fas fa-eye text-muted"></i></span>
                </div><br>
                        <?php 
							$data=$this->session->flashdata('sukses');
							if($data!=""){ ?>
							<div class="alert alert-success" role="alert" style="padding-top: 10%; padding-bottom:20%;">Sukses! <?=$data;?></div>
							<?php } ?>
							<?php 
							$data2=$this->session->flashdata('error');
							if($data2!=""){ ?>
							<div class="alert alert-danger" role="alert"> Error! <?=$data2;?></div>
							<?php } ?>
                            <?php 
							$data3=$this->session->flashdata('login_dulu');
							if($data3!=""){ ?>
							<div class="alert alert-danger" role="alert"> Error! <?=$data3;?></div>
							<?php } ?>
					<div class="text-center">
						<button type="submit" class="btn btn-primary" style="background: #a0ce4e; border:none">Sign In  <i class="fas fa-sign-in-alt" style="color: #1d7835;"></i></button>
					</div>
            </div>
        </div>
    </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
         
         function change()
         {
            let x = document.getElementById('pass').type;
 
            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye-slash text-muted"></i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye text-muted"></i>';
            }
         }
      </script>
</body>
</html>