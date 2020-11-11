<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

    <link href="<?php echo base_url(); ?>/css/floating-labels.css" rel="stylesheet"> 
<div class="form-signin">
    <div class="text-center mb-4">
        <img class="icon" src="<?= base_url() ?>/images/logopef.png" height="175">
        <!--<h2 class="mt-2 font-weight-bold mb-4">PEF x OHU Admin</h2>-->
    </div>

    <?= view('Myth\Auth\Views\_message_block') ?>

    <div class="row justify-content-center">
         <div class="col-sm-12">
            <div class="card mt-2 shadow bg-transparent border-0">
                <div class="card-body">
                    <form action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" asp-for="ReturnUrl" />

                        <fieldset>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="form-label-group">
                                        <input name="login" type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" id="input-username" placeholder="Username atau e-Mail" required autofocus autocomplete="new-password" autocapitalize="off">
                                        <label for="input-username">Username atau e-Mail</label>
                                        <div class="invalid-feedback">
								            <?= session('errors.login') ?>
							            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="form-label-group">
                                        <input name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" id="input-password" type="password" placeholder="<?=lang('Auth.password')?> / Kode Tiket" required>
                                        <label for="input-password">Password atau Kode Tiket</label>
                                        <i class="fa fas fa-eye eyepassword" id="eyepassword"></i>
										<div class="invalid-feedback">
											<?= session('errors.password') ?>
										</div>
                                    </div>
                                </div>
                            </div>

                            <!--Button-->
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary btn-block btn-lg" type="submit"><?=lang('Auth.loginAction')?></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
    <div class="row justify-content-center text-center no-gutters" style="margin-top:50px;">
        <div class="col-md-6">
            <img class="icon" src="<?= base_url() ?>/images/pef-ohu.png" width="350">
        </div>
    </div>
<script>
	$(document).ready(function () {
    $('#eyepassword').click(function () {
        if ($(this).hasClass('fa-eye')) {
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
            $('#input-password').attr('type', 'text');
        } else {
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
            $('#input-password').attr('type', 'password');
        }
    });
});
</script>

<?= $this->endSection() ?>
