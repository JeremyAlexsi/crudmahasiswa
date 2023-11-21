<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                            </div>
                                            <?= $this->session->flashdata('message'); ?>
                                            <form action="<?= base_url('auth'); ?>" method="post">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input class="au-input au-input--full" type="email" name="email"
                                                        placeholder="Email">
                                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="au-input au-input--full" type="password"
                                                        name="password" placeholder="Password">
                                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="login-checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember">Remember Me
                                                    </label>
                                                </div>
                                                <button class="au-btn au-btn--block au-btn--green m-b-20"
                                                    type="submit">sign in</button>
                                            </form>
                                            <hr>
                                            <div class="text-center">
                                                <a class="small" href="forgot-password.html">Lupa Password</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="<?= base_url(); ?>auth/registrasi">Buat Akun</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>