<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="index.html"><img src="../assets/images/icon.svg" alt="Brego Logo" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="جستجو در اینجا..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>
        </div>

        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="page-social.html" class="social icon-menu" title="News">اجتماعی</a></li>
                    <li><a href="page-news.html" class="news icon-menu" title="News">اخبار</a></li>
                    <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="منوی مگا">مگا</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-envelope"></i>
                            <span class="notification-dot bg-green">{{count($emails)}}</span>
                        </a>
                        <ul class="dropdown-menu right_chat email vivify fadeIn">
                            <li class="header">شما {{count($emails)}} ایمیل جدید دارید</li>
                            @foreach($emails as $email)
                                <li>
                                    @component('components.notification', [
                                        'emailLink' => $email['link'],
                                        'senderName' => $email['senderName'],
                                        'avatar' => $email['avatar'],
                                        'timeFromNow' => $email['timeFromNow'],
                                        'emailTitle' => $email['emailTitle']
                                    ])
                                    @endcomponent
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="notification-dot bg-azura">4</span>
                        </a>
                        <ul class="dropdown-menu feeds_widget vivify fadeIn">
                            <li class="header">شما 4 اطلاعیه جدید دارید</li>
                            <li>
                                <a href="#">
                                    <div class="feeds-left bg-red"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">مشکل حل شده<small class="float-right text-muted">9:10 صبح</small></h4>
                                        <small>ما همه اشکال طراحی با پاسخگو را رفع کرده ایم</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-info">کاربر جدید <small class="float-right text-muted">9:15 صبح</small></h4>
                                        <small>حس خوبی دارم توپ توپم! با تشکر از تیم</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">هشدار سرور <small class="float-right text-muted">9:10 صبح</small></h4>
                                        <small>اتصال شما خصوصی نیست</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-success">2 بازخورد جدید <small class="float-right text-muted">9:10 صبح</small></h4>
                                        <small>این یک پایان هوشمند برای سایت شما خواهد بود</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i></a></li>
                    <li><a href="{{route('logout')}}" class="icon-menu"><i class="icon-power"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
