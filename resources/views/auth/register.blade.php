<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>Register | Vhato - Responsive Bootstrap 5 Chat App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Vhato - Responsive Chat App Template in HTML. A fully featured HTML chat messenger template in Bootstrap 5"
        name="description"/>
    <meta name="keywords"
          content="Vhato chat template, chat, web chat template, chat status, chat template, communication, discussion, group chat, message, messenger template, status"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" id="tabIcon">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"/>

</head>

<body data-layout-mode="dark">

<div class="auth-bg">
    <div class="container p-0">
        <div class="row justify-content-center g-0">
            <div class="col-xl-9 col-lg-8">
                <div class="authentication-page-content shadow-lg">
                    <div class="d-flex flex-column h-100 px-4 pt-4">
                        <div class="row justify-content-center my-auto">
                            <div class="col-sm-8 col-lg-6 col-xl-6">

                                <div class="py-md-5 py-4">

                                    <div class="text-center mb-5">
                                        <h3>Registar Conta</h3>
                                        <p class="text-muted">Obtenha sua conta gratuita agora.</p>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="useremail" placeholder="Digite o e-mail" required>
                                            <div class="invalid-feedback">
                                                Por favor, digite o e-mail
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="name" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Digite o nome de usu??rio" required>
                                            <div class="invalid-feedback">
                                                Por favor, digite o nome de usu??rio
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Senha</label>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" placeholder="Digite a senha" required>
                                            <div class="invalid-feedback">
                                                Por favor, digite a senha
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Repetir senha</label>
                                            <input type="password" name="password_confirmation" class="form-control" id="userpassword" placeholder="Digite a senha" required>
                                            <div class="invalid-feedback">
                                                Por favor, digite a senha
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <p class="mb-0">Ao se registrar, voc?? concorda com o <a href="#" class="text-primary">Termos de uso</a></p>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                    type="submit">Register
                                            </button>
                                        </div>
                                    </form><!-- end form -->

                                    <div class="mt-5 text-center text-muted">
                                        <p>J?? tem uma conta ?<a href="{{route('login')}}"
                                                                class="fw-medium text-decoration-underline">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="text-center text-muted p-4">
                                    <p class="mb-0">&copy;
                                        <script>document.write(new Date().getFullYear())</script>
                                        Vhato. Crafted with <i
                                            class="mdi mdi-heart text-danger"></i> by Themesbrand
                                    </p>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end auth bg -->

<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<!-- validation init -->
<script src="assets/js/pages/validation.init.js"></script>

<!-- theme-style init -->
<script src="assets/js/pages/theme-style.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>
