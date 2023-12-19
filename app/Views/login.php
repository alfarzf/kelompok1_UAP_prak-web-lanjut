<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login SIWa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <style>
            body{
                background: url('../assets/img/login-bg.png') ;
               
            }
            .title{
              font-family: 'Noto Sans', sans-serif;
              font-weight: 800;
            }
            .no-border {
                border: none !important;      /* Remove the border */
                box-shadow: none !important;  /* Remove the box shadow */
                background: none !important;  /* Remove the background color (if any) */
                outline: none !important;     /* Remove the focus outline */
                /* Add any other custom styles to hide effects as needed */
                background: none;
            }
           .input{
            background-color: rgba(205, 198, 196, 0.5);
           }
           .username::placeholder {
              font-weight: 600;
                color: #ffffff; /* Replace with the desired color code */
                text
            }
    </style>
</head>
  <body>
    <div class="d-flex  align-items-center flex-column " style="height:100vh;width:100vw;padding-top:15vh;">
      <h1 class="title text-light" >SISTEM INFORMASI WARGA</h1>
      <form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>
            <div class="form-group " >
            

            <div class="input-group-prepend " >
                <span class="input-group-text input text-light " style="width:30vw;height:10vh;">
                    <i class="fa-regular fa-user"></i> 
                    
							<input type="text"style="border-radius:50%;" class="form-control no-border username <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.email')?>"
								   name="login" >
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div> </span>
            </div>
            </div></br>
			
            <div class="form-group">
            <div class="input-group-prepend " >
                <span class="input-group-text input text-light " style="width:30vw;height:10vh;">
                <i class="fas fa-lock"></i>
			
							<input type="password" name="password"  style="border-radius:50%;" class="form-control no-border username  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div> </span>
            </div></br>
          <button type="submit" class="btn" style="border-radius:2%;width:30vw;height:10vh;background: #EF7A55;color:white"><?=lang('Auth.loginAction')?></button>
    </form>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>