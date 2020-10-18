<div class="top-header">
    <div class="d-flex w-100 h-100 align-items-center">

        <div class="language-button mr-4">
            <div class="dropdown">
                <button type="button" class="dropdown-toggle px-2 py-1" data-toggle="dropdown">
                    {{ Str::upper(str_replace('_', '-', app()->getLocale())) }}
                    <img src="images/{{str_replace('_', '-', app()->getLocale())}}_flag.png" alt="">
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="setLocale/en">English <img src="images/en_flag.png" alt=""></a>
                  <a class="dropdown-item" href="setLocale/fr">Français <img src="images/fr_flag.png" alt=""></a>
                  <a class="dropdown-item" href="setLocale/es">Español <img src="images/es_flag.png" alt=""></a>
                  <a class="dropdown-item" href="setLocale/fa">فارسی <img src="images/fa_flag.png" alt=""></a>
                </div>
            </div>
        </div>

        <div class="preference-icons d-flex flex-row mr-3">
            <a href="/profile">
                <div class="profile-icon">
                    <i class="fa fa-user fa-lg"></i>
                </div>
            </a>
            <div class="theme-toggle">
                <i class="fa fa-moon fa-sun fa-lg"></i>
            </div>
        </div>

        <div class="wallet d-flex flex-row mr-3">
            <a href="/wallet">
                <i class="fa fa-wallet"></i>
                <span>۴۵۹۰۰ تومان</span>
            </a>
        </div>

        <div class="header-carousel d-flex flex-row align-items-center">
            <div class="right"><i class="fa fa-angle-right fa-3x"></i></div>
            <div class="outer-stage mx-3">
                <div class="stage d-flex">
                    <div class="slide">
                        <a href="">
                            <div class="text">
                                <div class="title">
                                    Dota 2
                                </div>
                                <div class="subtitle">
                                    <div class="time">
                                        16/03/2020
                                    </div>
                                    <div class="price">
                                        1200$
                                    </div>
                                </div>
                            </div>
                            <div class="image">
                                <div class="discount">۹۶٪</div>
                                <img src="images/header2.jpg" alt="header">
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="">
                            <div class="text">
                                <div class="title">
                                    Dota 2
                                </div>
                                <div class="subtitle">
                                    <div class="time">
                                        16/03/2020
                                    </div>
                                    <div class="price">
                                        1200$
                                    </div>
                                </div>
                            </div>
                            <div class="image">
                                <div class="discount">۹۶٪</div>
                                <img src="images/header3.jpg" alt="header">
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="">
                            <div class="text">
                                <div class="title">
                                    Dota 2
                                </div>
                                <div class="subtitle">
                                    <div class="time">
                                        16/03/2020
                                    </div>
                                    <div class="price">
                                        1200$
                                    </div>
                                </div>
                            </div>
                            <div class="image">
                                <div class="discount">۹۶٪</div>
                                <img src="images/header1.jpg" alt="header">
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="">
                            <div class="text">
                                <div class="title">
                                    Dota 2
                                </div>
                                <div class="subtitle">
                                    <div class="time">
                                        16/03/2020
                                    </div>
                                    <div class="price">
                                        1200$
                                    </div>
                                </div>
                            </div>
                            <div class="image">
                                <div class="discount">۹۶٪</div>
                                <img src="images/header2.jpg" alt="header">
                            </div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="">
                            <div class="text">
                                <div class="title">
                                    Dota 2
                                </div>
                                <div class="subtitle">
                                    <div class="time">
                                        16/03/2020
                                    </div>
                                    <div class="price">
                                        1200$
                                    </div>
                                </div>
                            </div>
                            <div class="image">
                                <div class="discount">۹۶٪</div>
                                <img src="images/header4.jpg" alt="header">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="left"><i class="fa fa-angle-left fa-3x"></i></div>
        </div>

        <div class="logo mr-auto">
            <a href="/">
                <img id="logo-rect" src="images/logo_dark.png" alt="steam-logo">
                <img id="logo-sq" src="images/logo_sq_dark.png" alt="steam-logo">
            </a>
        </div>
        <div class="pl-4 pr-3 py-2 sidebar-toggle">
            <i class="fa fa-bars fa-lg"></i>
        </div>
    </div>
</div>