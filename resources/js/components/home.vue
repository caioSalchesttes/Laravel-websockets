<template>
<!--    Iniciar o menu da barra lateral esquerda-->
    <div class="side-menu flex-lg-column">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655zM7 12h2a3 3 0 0 0 6 0h2a5 5 0 0 1-10 0z" />
                    </svg>
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655zM7 12h2a3 3 0 0 0 6 0h2a5 5 0 0 1-10 0z" />
                    </svg>
                </span>
            </a>
        </div>
        <!-- end navbar-brand-box -->

        <!-- Start side-menu nav -->
        <div class="flex-lg-column my-0 sidemenu-navigation">
            <ul class="nav nav-pills side-menu-nav" role="tablist">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" id="pills-user-tab" data-bs-toggle="pill" href="#pills-user" role="tab">
                        <i class="ri-user-3-line"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="pills-chat-tab" data-bs-toggle="pill" href="#pills-chat" role="tab">
                        <i class="ri-discuss-line"></i>
                        <span class="badge bg-danger fs-11 rounded-pill sidenav-item-badge">9</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contacts-tab" data-bs-toggle="pill" href="#pills-contacts" role="tab">
                        <i class="ri-contacts-book-line"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="#pills-setting" role="tab">
                        <i class="ri-settings-4-line"></i>
                    </a>
                </li>
                <li class="nav-item dropdown profile-user-dropdown">
                    <a class="nav-link dropdown-toggle bg-light" href="#" role="button" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="profile-user rounded-circle">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" id="pills-user-tab"
                           data-bs-toggle="pill" href="#pills-user" role="tab">Profile <i
                            class="bx bx-user-circle text-muted ms-1"></i></a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" id="pills-setting-tab"
                           data-bs-toggle="pill" href="#pills-setting" role="tab">Setting <i
                            class="bx bx-cog text-muted ms-1"></i></a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                           href="auth-changepassword.html">Change Password <i
                            class="bx bx-lock-open text-muted ms-1"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                           href="auth-logout.html">Log out <i class="bx bx-log-out-circle text-muted ms-1"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end side-menu nav -->
    </div>

<!--    iniciar chat barra lateral esquerda-->
    <div class="chat-leftsidebar">

        <div class="tab-content">
            <!-- Start Profile tab-pane -->
            <div class="tab-pane" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                <!-- Start profile content -->
                <perfil/>
                <!-- End profile content -->
            </div>
            <!-- End Profile tab-pane -->

            <!-- Start chats tab-pane -->
            <div class="tab-pane show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
                <!-- Start chats content -->
                <chat/>
                <!-- Start chats content -->
            </div>
            <!-- End chats tab-pane -->

            <!-- Start contacts tab-pane -->
            <div class="tab-pane" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                <!-- Start Contact content -->
                <contato/>
                <!-- Start Contact content -->
            </div>
            <!-- End contacts tab-pane -->

            <!-- Start calls tab-pane -->
            <div class="tab-pane" id="pills-calls" role="tabpanel" aria-labelledby="pills-calls-tab">
                <!-- Start Contact content -->
                <div>
                    <div class="px-4 pt-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-3">Calls</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end p-4 -->

                    <!-- Start contact lists -->
                    <div class="chat-message-list chat-call-list" data-simplebar>
                        <ul class="list-unstyled chat-list" id="callList">

                        </ul>
                    </div>
                    <!-- end contact lists -->
                </div>
                <!-- Start Contact content -->
            </div>
            <!-- End calls tab-pane -->

            <!-- Start settings tab-pane -->
            <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                <!-- Start Settings content -->
                <conf/>
                <!-- Start Settings content -->
            </div>
            <!-- End settings tab-pane -->
        </div>
        <!-- end tab content -->
    </div>

<!--    LISTAGEM CHAT-->
    <div class="user-chat w-100 overflow-hidden">

        <div class="chat-content d-lg-flex">
            <!-- start chat conversation section -->
            <div class="w-100 overflow-hidden position-relative">
                <!-- conversation user -->
                <div id="users-chat" class="position-relative">
                    <div class="py-3 user-chat-topbar">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-8">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                                        <a href="" class="btn-primary user-chat-remove fs-18 p-1"><i
                                            class="bx bx-chevron-left align-middle"></i></a>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt="">
                                                <span class="user-status"></span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate mb-0 fs-18"><a href="#"
                                                                                        class="user-profile-show text-reset">Victoria Lane</a></h6>
                                                <p class="text-truncate text-muted mb-0"><small>Online</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-4">
                                <ul class="list-inline user-chat-nav text-end mb-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-search'></i>
                                            </button>
                                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                <div class="search-box p-2">
                                                    <input type="text" class="form-control" placeholder="Search.."
                                                           id="searchChatMessage">
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                                data-bs-target=".audiocallModal">
                                            <i class='bx bxs-phone-call'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                                data-bs-target=".videocallModal">
                                            <i class='bx bx-video'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                                data-bs-target=".pinnedtabModal">
                                            <i class='bx bx-bookmark'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn user-profile-show">
                                            <i class='bx bxs-info-circle'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none user-profile-show"
                                                   href="#">View Profile <i class="bx bx-user text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                   href="#" data-bs-toggle="modal" data-bs-target=".audiocallModal">Audio <i
                                                    class="bx bxs-phone-call text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                   href="#" data-bs-toggle="modal" data-bs-target=".videocallModal">Video <i
                                                    class="bx bx-video text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Archive <i class="bx bx-archive text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Muted <i class="bx bx-microphone-off text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Delete <i class="bx bx-trash text-muted"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- end chat user head -->

                    <!-- start chat conversation -->

                    <div class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar>
                        <ul class="list-unstyled chat-conversation-list" id="users-conversation">
                        </ul>

                        <!-- <div class="chat-list left" id="10">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="message-img mb-0">
                                            <div class="message-img-list">
                                                <div>
                                                    <iframe src="https://www.youtube.com/embed/PHcgN1GTjdU" title="YouTube video"
                                                        class="w-100 rounded" autoplay allowfullscreen></iframe>
                                                </div>

                                                <div class="message-img-link">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="assets/images/small/img-1.jpg" download="">
                                                                    Download <i class="bx bx-download ms-2 text-muted"></i>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#" data-bs-toggle="collapse" data-bs-target=".replyCollapse">
                                                                    Reply <i class="bx bx-share ms-2 text-muted"></i>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#" data-bs-toggle="modal" data-bs-target=".forwardModal">
                                                                    Forward <i class="bx bx-share-alt ms-2 text-muted"></i>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i>
                                                                </a>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between delete-image"
                                                                    href="#">
                                                                    Delete <i class="bx bx-trash ms-2 text-muted"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name">
                                        <small class="text-muted time">11:45 am</small>
                                        <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chat-list left" id="11">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="message-img mb-0">
                                            <div class="message-img-list">
                                                <audio controls>
                                                    <source src="http://w3codegenerator.com/audio/audio.mp3" type="audio/mpeg">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name">
                                        <small class="text-muted time">11:45 am</small>
                                        <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show" id="copyClipBoard"
                         role="alert">
                        Message copied
                    </div>
                    <!-- end chat conversation end -->
                </div>



                <!-- conversation group -->
                <div id="channel-chat" class="position-relative">
                    <div class="py-3 user-chat-topbar">
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-8">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                                        <a href="" class="btn-primary user-chat-remove fs-18 p-1"><i
                                            class="bx bx-chevron-left align-middle"></i></a>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3">
                                                <img src="assets/images/users/user-dummy-img.jpg" class="rounded-circle avatar-sm"
                                                     alt="">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate mb-0 fs-18"><a href="#"
                                                                                        class="user-profile-show text-reset">Design Phase 2</a></h6>
                                                <p class="text-truncate text-muted mb-0"><small>24 Members</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-4">
                                <ul class="list-inline user-chat-nav text-end mb-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-search'></i>
                                            </button>
                                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                <div class="search-box p-2">
                                                    <input type="text" class="form-control" placeholder="Search..">
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn" data-bs-toggle="modal"
                                                data-bs-target=".groupvideocallModal">
                                            <i class='bx bx-video'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                        <button type="button" class="btn nav-btn user-profile-show">
                                            <i class='bx bxs-info-circle'></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none user-profile-show"
                                                   href="#">View Profile <i class="bx bx-user text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                   href="#" data-bs-toggle="modal" data-bs-target=".audiocallModal">Audio <i
                                                    class="bx bxs-phone-call text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                   href="#" data-bs-toggle="modal" data-bs-target=".videocallModal">Video <i
                                                    class="bx bx-video text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Archive <i class="bx bx-archive text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Muted <i class="bx bx-microphone-off text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Delete <i class="bx bx-trash text-muted"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end chat user head -->

                    <!-- start chat conversation -->

                    <div class="chat-conversation p-3 p-lg-4" id="chat-conversation" data-simplebar>
                        <ul class="list-unstyled chat-conversation-list" id="channel-conversation">
                        </ul>
                    </div>
                    <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show " id="copyClipBoardChannel"
                         role="alert">
                        message copied
                    </div>
                    <!-- end chat conversation end -->
                </div>

                <!-- start chat input section -->
                <div class="position-relative">
                    <div class="chat-input-section p-4 border-top">

                        <form id="chatinput-form" enctype="multipart/form-data">
                            <div class="row g-0 align-items-center">
                                <div class="file_Upload"></div>
                                <div class="col-auto">
                                    <div class="chat-input-links me-md-2">
                                        <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                             data-bs-placement="top" title="More">
                                            <button type="button"
                                                    class="btn btn-link text-decoration-none btn-lg waves-effect"
                                                    data-bs-toggle="collapse" data-bs-target="#chatinputmorecollapse"
                                                    aria-expanded="false" aria-controls="chatinputmorecollapse">
                                                <i class="bx bx-dots-horizontal-rounded align-middle"></i>
                                            </button>
                                        </div>
                                        <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                             data-bs-placement="top" title="Emoji">
                                            <button type="button"
                                                    class="btn btn-link text-decoration-none btn-lg waves-effect emoji-btn"
                                                    id="emoji-btn">
                                                <i class="bx bx-smile align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <div class="chat-input-feedback">
                                            Please Enter a Message
                                        </div>
                                        <input autocomplete="off" type="text"
                                               class="form-control form-control-lg bg-light border-0 chat-input" autofocus
                                               id="chat-input" placeholder="Type your message...">
                                        <div class="chat-input-typing">
                                            <span class="typing-user d-flex">Victoria Lane
                                                is
                                                typing
                                                <span class="typing ms-2">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="chat-input-links ms-2 gap-md-1">
                                        <div class="links-list-item d-none d-sm-block"
                                             data-bs-container=".chat-input-links" data-bs-toggle="popover"
                                             data-bs-trigger="focus" data-bs-html="true" data-bs-placement="top"
                                             data-bs-content="<div class='loader-line'><div class='line'></div><div class='line'></div><div class='line'></div><div class='line'></div><div class='line'></div></div>">
                                            <button type="button"
                                                    class="btn btn-link text-decoration-none btn-lg waves-effect"
                                                    onclick="audioPermission()">
                                                <i class="bx bx-microphone align-middle"></i>
                                            </button>
                                        </div>
                                        <div class="links-list-item">
                                            <button type="submit"
                                                    class="btn btn-primary btn-lg chat-send waves-effect waves-light"
                                                    data-bs-toggle="collapse" data-bs-target=".chat-input-collapse1.show">
                                                <i class="bx bxs-send align-middle" id="submit-btn"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="chat-input-collapse chat-input-collapse1 collapse" id="chatinputmorecollapse">
                            <div class="card mb-0">
                                <div class="card-body py-3">
                                    <!-- Swiper -->
                                    <div class="swiper chatinput-links">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="text-center px-2 position-relative">
                                                    <div>
                                                        <input id="attachedfile-input" type="file" class="d-none"
                                                               accept=".zip,.rar,.7zip,.pdf" multiple>
                                                        <label for="attachedfile-input"
                                                               class="avatar-sm mx-auto stretched-link">
                                                            <span
                                                                class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                                <i class="bx bx-paperclip"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase mt-3 mb-0 text-body text-truncate">
                                                        Attached</h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2">
                                                    <div class="avatar-sm mx-auto">
                                                        <div
                                                            class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                            <i class="bx bxs-camera"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                                                                                class="text-body stretched-link"
                                                                                                                onclick="cameraPermission()">Camera</a></h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2 position-relative">
                                                    <div>
                                                        <input id="galleryfile-input" type="file" class="d-none"
                                                               accept="image/png, image/gif, image/jpeg" multiple>
                                                        <label for="galleryfile-input"
                                                               class="avatar-sm mx-auto stretched-link">
                                                            <span
                                                                class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                                <i class="bx bx-images"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0">Gallery
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2">
                                                    <div>
                                                        <input id="audiofile-input" type="file" class="d-none"
                                                               accept="audio/*" multiple>
                                                        <label for="audiofile-input"
                                                               class="avatar-sm mx-auto stretched-link">
                                                            <span
                                                                class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                                <i class="bx bx-headphone"></i>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0">Audio</h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2">
                                                    <div class="avatar-sm mx-auto">
                                                        <div
                                                            class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                            <i class="bx bx-current-location"></i>
                                                        </div>
                                                    </div>

                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                                                                                class="text-body stretched-link"
                                                                                                                onclick="getLocation()">Location</a></h5>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="text-center px-2">
                                                    <div class="avatar-sm mx-auto">
                                                        <div
                                                            class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                            <i class="bx bxs-user-circle"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                                                                                class="text-body stretched-link" data-bs-toggle="modal"
                                                                                                                data-bs-target=".contactModal">Contacts</a></h5>
                                                </div>
                                            </div>

                                            <div class="swiper-slide d-block d-sm-none">
                                                <div class="text-center px-2">
                                                    <div class="avatar-sm mx-auto">
                                                        <div
                                                            class="avatar-title fs-18 bg-soft-primary text-primary rounded-circle">
                                                            <i class="bx bx-microphone"></i>
                                                        </div>
                                                    </div>
                                                    <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                                                                                class="text-body stretched-link">Audio</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="replyCard">
                        <div class="card mb-0">
                            <div class="card-body py-3">
                                <div class="replymessage-block mb-0 d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="conversation-name"></h5>
                                        <p class="mb-0"></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <button type="button" id="close_toggle"
                                                class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                            <i class="bx bx-x align-middle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end chat input section -->
            </div>
            <!-- end chat conversation section -->

            <!-- start User profile detail sidebar -->
            <div class="user-profile-sidebar">

                <div class="p-3 border-bottom">
                    <div class="user-profile-img">
                        <img src="assets/images/users/avatar-2.jpg" class="profile-img rounded" alt="">
                        <div class="overlay-content rounded">
                            <div class="user-chat-nav p-2">
                                <div class="d-flex w-100">
                                    <div class="flex-grow-1">
                                        <button type="button" class="btn nav-btn text-white user-profile-show d-none d-lg-block">
                                            <i class="bx bx-x"></i>
                                        </button>
                                        <button type="button" class="btn nav-btn text-white user-profile-show d-block d-lg-none">
                                            <i class="bx bx-left-arrow-alt"></i>
                                        </button>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <button class="btn nav-btn text-white dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none user-profile-show"
                                                   href="#">View Profile <i class="bx bx-user text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                   href="#" data-bs-toggle="modal" data-bs-target=".audiocallModal">Audio <i
                                                    class="bx bxs-phone-call text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                   href="#" data-bs-toggle="modal" data-bs-target=".videocallModal">Video <i
                                                    class="bx bx-video text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Archive <i class="bx bx-archive text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Muted <i class="bx bx-microphone-off text-muted"></i></a>
                                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                   href="#">Delete <i class="bx bx-trash text-muted"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-auto p-3">
                                <h5 class="user-name mb-0 text-truncate">Victoria Lane</h5>
                                <p class="fs-14 text-truncate user-profile-status mt-1 mb-0"><i class="bx bxs-circle fs-10 text-success me-1 ms-0"></i>
                                    Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End profile user -->

                <!-- Start user-profile-desc -->
                <div class="p-4 user-profile-desc" data-simplebar>
                    <div class="text-center border-bottom border-bottom-dashed">
                        <div class="d-flex gap-2 justify-content-center mb-4">
                            <button type="button" class="btn avatar-sm p-0">
                                <span class="avatar-title rounded bg-soft-info text-info">
                                    <i class="bx bxs-message-alt-detail"></i>
                                </span>
                            </button>
                            <button type="button" class="btn avatar-sm p-0 favourite-btn">
                                <span class="avatar-title rounded bg-soft-danger text-body">
                                    <i class="bx bx-heart"></i>
                                </span>
                            </button>
                            <button type="button" class="btn avatar-sm p-0" data-bs-toggle="modal" data-bs-target=".audiocallModal">
                                <span class="avatar-title rounded bg-soft-success text-success">
                                    <i class="bx bxs-phone-call"></i>
                                </span>
                            </button>
                            <button type="button" class="btn avatar-sm p-0" data-bs-toggle="modal" data-bs-target=".videocallModal">
                                <span class="avatar-title rounded bg-soft-warning text-warning">
                                    <i class="bx bx-video"></i>
                                </span>
                            </button>
                            <div class="dropdown">
                                <button class="btn avatar-sm p-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span class="avatar-title bg-soft-primary text-primary rounded">
                                        <i class='bx bx-dots-horizontal-rounded'></i>
                                    </span>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Archive <i
                                        class="bx bx-archive text-muted"></i></a>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Muted <i
                                        class="bx bx-microphone-off text-muted"></i></a>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Delete <i
                                        class="bx bx-trash text-muted"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-muted pt-4">
                        <h5 class="fs-12 text-muted text-uppercase">Status :</h5>
                        <p class="mb-4">A professional profile is a brief summary of your skills, strengths, and key experiences.
                        </p>
                    </div>

                    <div class="pb-4 border-bottom border-bottom-dashed mb-4">
                        <h5 class="fs-12 text-muted text-uppercase mb-2">Info :</h5>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="ri-user-line align-middle fs-15 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fs-14 text-truncate mb-0"> Victoria Lane</h5>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <i class="ri-mail-line align-middle fs-15 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fs-14 text-truncate mb-0">bellacote@vhato.com</h5>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <i class="ri-phone-line align-middle fs-15 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fs-14 text-truncate mb-0">+(345) 3216 48751</h5>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <i class="ri-mail-line align-middle fs-15 text-muted"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fs-14 text-truncate mb-0">California, USA</h5>
                            </div>
                        </div>
                    </div>

                    <div class="pb-4 border-bottom border-bottom-dashed mb-4">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h5 class="fs-12 text-muted text-uppercase">Group in common</h5>
                            </div>
                        </div>

                        <ul class="list-unstyled chat-list mx-n4">
                            <li>
                                <a href="">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/users/group-img.jpg" alt="" class="avatar-sm rounded-circle me-3">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h6 class="text-truncate mb-0">Landing Design</h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title rounded-circle bg-light text-dark">
                                                SM
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h6 class="text-truncate mb-0">Sales & Marketing</h6>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="pb-4 border-bottom border-bottom-dashed mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-grow-1">
                                <h5 class="fs-12 text-muted text-uppercase mb-0">Shared Images</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#" class="fs-12 fw-medium d-block">Show all</a>
                            </div>
                        </div>
                        <div class="profile-media-img">
                            <div class="row g-1">
                                <div class="col-lg-4 col-6">
                                    <a href="#">
                                        <img src="assets/images/small/img-1.jpg" alt="media img" class="img-fluid rounded">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <a href="#">
                                        <img src="assets/images/small/img-2.jpg" alt="media img" class="img-fluid rounded">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <a href="#">
                                        <img src="assets/images/small/img-3.jpg" alt="media img" class="img-fluid rounded">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <a href="#">
                                        <img src="assets/images/small/img-4.jpg" alt="media img" class="img-fluid rounded">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <a href="#">
                                        <img src="assets/images/small/img-5.jpg" alt="media img" class="img-fluid rounded">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="position-relative rounded overflow-hidden">
                                        <a href="" class="d-block">
                                            <img src="assets/images/small/img-6.jpg" alt="media img" class="img-fluid rounded">

                                            <div class="bg-overlay"></div>
                                            <div class="position-absolute top-50 start-50 text-white translate-middle fs-16">
                                                +10
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div>
                            <h5 class="fs-11 text-muted text-uppercase mb-3">Attached Files</h5>
                        </div>

                        <div>
                            <div class="card mb-2 border border-dashed">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 ms-1 me-3">
                                            <img src="assets/images/pdf-file.png" alt="" class="avatar-xs">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="fs-14 text-truncate mb-1">design-phase-1-approved.pdf</h5>
                                            <p class="text-muted fs-13 mb-0">12.5 MB</p>
                                        </div>

                                        <div class="flex-shrink-0 ms-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="bx bxs-download"></i>
                                                    </a>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#" role="button"
                                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                           href="#">Share <i class="bx bx-share-alt ms-2 text-muted"></i></a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                           href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                           href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border border-dashed mb-2">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 ms-1 me-3">
                                            <img src="assets/images/image-file.png" alt="" class="avatar-xs">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="fs-14 text-truncate mb-1">Image-1.jpg</h5>
                                            <p class="text-muted fs-13 mb-0">4.2 MB</p>
                                        </div>

                                        <div class="flex-shrink-0 ms-3">
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <a href="#" class="text-muted px-1">
                                                        <i class="bx bxs-download"></i>
                                                    </a>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-muted px-1" href="#" role="button"
                                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                           href="#">Share <i class="bx bx-share-alt ms-2 text-muted"></i></a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                           href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                           href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 border border-dashed mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/image-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1">Image-2.jpg</h5>
                                        <p class="text-muted fs-13 mb-0">3.1 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="d-flex gap-2">
                                            <div>
                                                <a href="#" class="text-muted px-1">
                                                    <i class="bx bxs-download"></i>
                                                </a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted px-1" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                       href="#">Share <i class="bx bx-share-alt ms-2 text-muted"></i></a>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                       href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                       href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-2 border border-dashed mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 ms-1 me-3">
                                        <img src="assets/images/zip-file.png" alt="" class="avatar-xs">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="fs-14 text-truncate mb-1">Landing-A.zip</h5>
                                        <p class="text-muted fs-13 mb-0">6.7 MB</p>
                                    </div>

                                    <div class="flex-shrink-0 ms-3">
                                        <div class="d-flex gap-2">
                                            <div>
                                                <a href="#" class="text-muted px-1">
                                                    <i class="bx bxs-download"></i>
                                                </a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted px-1" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                       href="#">Share <i class="bx bx-share-alt ms-2 text-muted"></i></a>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                       href="#">Bookmark <i class="bx bx-bookmarks text-muted ms-2"></i></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                       href="#">Delete <i class="bx bx-trash ms-2 text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end user-profile-desc -->
            </div>
            <!-- end User profile detail sidebar -->
        </div>
        <!-- end user chat content -->
    </div>
</template>

<script>
import conf from './conf'
import contato from './conf'
import chat from './conf'
import perfil from './conf'

export default {
    name: "home",
    components: {conf,contato,chat,perfil},

}
</script>
