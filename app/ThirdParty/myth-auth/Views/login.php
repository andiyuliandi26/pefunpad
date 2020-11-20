<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

    <link href="<?php echo base_url(); ?>/css/floating-labels.css" rel="stylesheet"> 
<style>
        .container-bg {
			position: relative;
			width:100%;
		}

		.image-bg {
		  opacity: 1;
		  display: block;
		  width: 100%;
		  height: auto;
		  transition: .5s ease;
		  backface-visibility: visible;
		}

		.content-page {
		  opacity: 1;
		  position: absolute;
		  top: 1rem;
		  width:100%;
		  text-align: center;
		}

        .form-control {
	        display: block;
	        width: 100%;
	        /*height: calc(1.5em + 0.75rem + 2px);*/
	        height: calc(2.5em + 0.75rem + 2px);
	        padding: 0.375rem 0.75rem;
	        font-size: 1.5rem;
	        font-weight: 400;
	        line-height: 1.5;
	        color: #FFF;
	        /*background-color: #fff;
	        background-clip: padding-box;*/
	        /*border: 1px solid #d1d3e2;*/
	        border-radius: 0.35rem;
	        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .form-control:focus {
	        color: #fff;
	        outline: 0;
	        box-shadow: 0 0 0 0 rgba(78, 115, 223, 0);
        }

        .form-label-group > input, .form-label-group > label {
	        height: 4.125rem;
	        padding: .75rem;
        }
    </style>

<div class="form-signin">
    <div class="text-center mb-4">
        <a href="<?= base_url(); ?>"><img class="icon" src="<?= base_url() ?>/images/logopef.png" height="175"></a>
    </div>

    <?= view('Myth\Auth\Views\_message_block') ?>
    
    <div class="row justify-content-center">
         <div class="col-md-12 col-xs-6">
            <form action="<?= route_to('login') ?>" method="post">
                <div class="card mt-2 shadow bg-transparent border-0">
                    <div class="card-body">                    
                            <?= csrf_field() ?>
                            <input type="hidden" asp-for="ReturnUrl" />
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col-md-12 col-xs-6">
                                        <div class="container-bg">
	                                        <img class="image-bg" src="/images/bg-login-form.png" />
	                                        <div class="content-page">
		                                        <div class="form-label-group">
                                                    <input name="login" type="text" class="form-control bg-transparent border-0 mt-3 pl-5" id="input-username" placeholder="Kode Tiket / Email" required autofocus autocomplete="new-password" autocapitalize="off">
                                                    <label for="input-username" class="text-white h4">Kode Tiket / Email</label>
                                                    <div class="invalid-feedback">
								                        <?= session('errors.login') ?>
							                        </div>
                                                </div>
	                                        </div>
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <div class="col-md-12">
                                        <div class="container-bg">
	                                        <img class="image-bg" src="/images/bg-login-form.png" />
	                                        <div class="content-page">
		                                        <div class="form-label-group">
                                                    <input name="password" class="form-control bg-transparent border-0 mt-3 pl-5" id="input-password" type="password" placeholder="<?=lang('Auth.password')?> atau Kode Tiket" required>
                                                    <label for="input-password" class="text-white h4">Password atau Kode Tiket</label>
                                                    <i class="fa fas fa-eye eyepassword text-white" id="eyepassword"></i>
										            <div class="invalid-feedback">
											            <?= session('errors.password') ?>
										            </div>
                                                </div>
	                                        </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </fieldset>                    
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary btn-block btn-lg" type="submit"><?=lang('Auth.loginAction')?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
    <!--<div class="row justify-content-center text-center no-gutters" style="margin-top:50px;">
        <div class="col-md-6">
            <img class="icon" src="<?= base_url() ?>/images/pef-ohu.png" width="350">
        </div>
    </div>-->

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
