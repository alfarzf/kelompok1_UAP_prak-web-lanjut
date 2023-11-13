<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3">

			<div class="card">
				<h2 class="card-header"><?=lang('Auth.loginTitle')?></h2>
				<div class="card-body">

					<?= view('App\Views\Auth\_message_block') ?>
					<form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>
            <div class="form-group " >
            

            <div class="input-group-prepend " >
                <span class="input-group-text input text-light " style="width:30vw;height:10vh;">
                    <i class="fa-regular fa-user"></i> 
                    <label for="login"><?=lang('Auth.email')?></label>
							<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div> </span>
            </div>
            </div></br>
			<div class="form-group">
							<label for="login"><?=lang('Auth.emailOrUsername')?></label>
							<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
            <div class="form-group">
            <div class="input-group-prepend " >
                <span class="input-group-text input text-light " style="width:30vw;height:10vh;">
                <i class="fas fa-lock"></i>
				<label for="password"><?=lang('Auth.password')?></label>
							<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div> </span>
            </div></br>
          <button type="submit" class="btn" style="border-radius:2%;width:30vw;height:10vh;background: #EF7A55;color:white"><?=lang('Auth.loginAction')?></button>
    </form>
					

<?php if ($config->allowRegistration) : ?>
					<p><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
<?php endif; ?>
<?php if ($config->activeResetter): ?>
					<p><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>
