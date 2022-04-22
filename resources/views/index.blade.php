<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Chat | Vhato - Responsive Bootstrap 5 Chat App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Vhato - Responsive Chat App Template in HTML. A fully featured HTML chat messenger template in Bootstrap 5" name="description" />
    <meta name="keywords" content="Vhato chat template, chat, web chat template, chat status, chat template, communication, discussion, group chat, message, messenger template, status"/>
    <meta content="Themesbrand" name="author" />

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" id="tabIcon">

    <!-- glightbox css -->
    <link rel="stylesheet" href="assets/libs/glightbox/css/glightbox.min.css">

    <!-- One of the following themes -->
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css" /> <!-- 'classic' theme -->

    <!-- swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-layout-mode="dark">

<div id="app" class="layout-wrapper d-lg-flex">
    <home/>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header bg-soft-info">
        <h5 class="offcanvas-title" id="theme-settings-offcanvasLabel">Theme Customizer</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body customizer-palettes">
        <div class="row g-3">
            <div class="col-lg-12">
                <div class="mt-3">
                    <h6 class="text-muted text-uppercase fs-13 mb-0">Select Custome Colors</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color01" name="bgcolor-radio" type="radio" value="color01"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color01 p-0 avatar-md w-100"
                        for="customizer-color01"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-01</h5>
            </div>
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color02" name="bgcolor-radio" type="radio" value="color02"
                        class="form-check-input theme-color" checked>
                    <label class="form-check-label customizer-color02 p-0 avatar-md w-100"
                        for="customizer-color02"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-02</h5>
            </div>
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color03" name="bgcolor-radio" type="radio" value="color03"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color03 p-0 avatar-md w-100"
                        for="customizer-color03"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-03</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color04" name="bgcolor-radio" type="radio" value="color04"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color04 p-0 avatar-md w-100"
                        for="customizer-color04"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-04</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color05" name="bgcolor-radio" type="radio" value="color05"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color05 p-0 avatar-md w-100"
                        for="customizer-color05"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-05</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color06" name="bgcolor-radio" type="radio" value="color06"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color06 p-0 avatar-md w-100"
                        for="customizer-color06"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-06</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color07" name="bgcolor-radio" type="radio" value="color07"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color07 p-0 avatar-md w-100"
                        for="customizer-color07"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-07</h5>
            </div>
            <!-- end col -->
            <div class="col-6">
                <div class="form-check card-radio">
                    <input id="customizer-color08" name="bgcolor-radio" type="radio" value="color08"
                        class="form-check-input theme-color">
                    <label class="form-check-label customizer-color08 p-0 avatar-md w-100"
                        for="customizer-color08"></label>
                </div>
                <h5 class="fs-13 text-center mt-2">Color-08</h5>
            </div>
            <!-- end col -->
        </div>
        <!--end row-->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="d-flex mb-3">
                    <h6 class="flex-grow-1 text-muted text-uppercase fs-13 mb-0">Select Custome Colors to Picker</h6>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div class="custom-colors-picker">
                    <div class="colorpicker-primary"></div>
                </div>
                <h5 class="fs-13 text-center mt-2">Primary</h5>
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div class="custom-colors-picker">
                    <div class="colorpicker-secondary"></div>
                </div>
                <h5 class="fs-13 text-center mt-2">Secondary</h5>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</div>


<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Modern colorpicker bundle -->
<script src="assets/libs/@simonwep/pickr/pickr.min.js"></script>

<!-- glightbox js -->
<script src="assets/libs/glightbox/js/glightbox.min.js"></script>

<!-- Swiper JS -->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- fg-emoji-picker JS -->
<script src="assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>

<!-- page init -->
<script src="assets/js/pages/index.init.js"></script>

<script src="assets/js/app.js"></script>
</body>

</html>
