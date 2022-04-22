<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Log in | Vhato - Responsive Bootstrap 5 Chat App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Vhato - Responsive Chat App Template in HTML. A fully featured HTML chat messenger template in Bootstrap 5"
        name="description"/>
    <meta name="keywords"
          content="Vhato chat template, chat, web chat template, chat status, chat template, communication, discussion, group chat, message, messenger template, status"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" id="tabIcon">
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
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
                        <div class="row justify-content-center">
                            <div class="col-sm-8 col-lg-6 col-xl-6">

                                <div class="py-md-5 py-4">

                                    <div class="text-center mb-5">
                                        <h3>Bem vindo!</h3>
                                        <p class="text-muted">Faça login para continuar.</p>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Digite seu email">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-recoverpw.html" class="text-muted">Esqueceu sua senha?</a>
                                            </div>
                                            <label for="password" class="form-label">Senha</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5"
                                                       placeholder="Digite sua senha" id="password">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-check form-check-info fs-16">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label fs-14" for="remember-check">
                                                Lembrar me
                                            </label>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Logar</button>
                                        </div>
                                    </form><!-- end form -->

                                    <div class="mt-5 text-center text-muted">
                                        <p>Não tem uma conta? <a href="{{route('register')}}"
                                                                      class="fw-medium text-decoration-underline">
                                                Registrar</a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="text-center text-muted p-4">
                                    <p class="mb-0">&copy;
                                        <script>document.write(new Date().getFullYear())</script>
                                        COS. Crafted with <i
                                            class="mdi mdi-heart text-danger"></i> by Caio
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
<!-- password addon -->
<script src="assets/js/pages/password-addon.init.js"></script>

<!-- theme-style init -->
<script src="assets/js/pages/theme-style.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>
