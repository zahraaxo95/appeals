<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://pas.gov.kw/interface/css/simple-lightbox.min.css" rel="stylesheet" />
    <link href="https://pas.gov.kw/interface/css/animate.min.css" rel="stylesheet" />
    <link href="https://pas.gov.kw/interface/css/hover.css" rel="stylesheet">
    <link href="https://pas.gov.kw/interface/css/slick.css" rel="stylesheet">
    <link href="https://pas.gov.kw/interface/css/slick-theme.css" rel="stylesheet">
    <link href="https://pas.gov.kw/interface/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://pas.gov.kw/interface/css/main.css" rel="stylesheet">
    <link href="https://pas.gov.kw/interface/css/style-ar.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/d10920a460.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- css --> 


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body>
    <header>
    <div class="menu-logo fixed-top">
                <div class="dektop_logo_wrapper" style="">
                    <div class="container">
                        <a href="https://pas.gov.kw" class="main_logo">
                            <img src="https://pas.gov.kw/interface/img/logo.png" style="height:90px;" alt="">
                        </a>
                        <a href="https://pas.gov.kw" class="main_logo">
                            <img src="https://pas.gov.kw/interface/img/logo-kw.png" alt="">
                        </a>
                    </div>
                </div>
                <!--headerNav-->
                <div class="headerNav">
                    <div class="container">

                        <div class="mobile_menu">
                            <ul class="site_links">
                                <li class="nav-item"><a class="nav-link active" href="https://pas.gov.kw"><i class="fa fa-home"></i></a></li>

                                <li class="nav-item has_dropdown_menu">
                                    <a class="nav-link">
                                        عن الهيئة
                                        <i class="fa fa-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/page/1">نبذه عن الهيئة</a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/strategy">إستراتيجية الهيئة</a></li>
                                        <li class="dropdown-item" style="display:none;"><a href="https://pas.gov.kw/management">مجلس الادارة</a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/executive">الجهاز التنفيذي</a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/organization">الهيكل التنظيمي</a></li>
                                        <li class="dropdown-item has_sub_menu">
                                            <a>الهيئات الرياضية <i class="fa fa-chevron-left"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/places/federation">الاتحادات الرياضية</a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/places/inclusive">الأندية الرياضية الشاملة</a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/places/specialized">الأندية الرياضية المتخصصة</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has_dropdown_menu">
                                    <a class="nav-link">
                                        خدماتنا
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="https://sbs.pas.gov.kw/">حجز الساحات</a></li>
                                        <li class="dropdown-item"><a href="https://creg.pas.gov.kw/">تسجيل الشركات </a></li>
                                        <li class="dropdown-item"><a href="https://emsgs.pas.gov.kw/">تراسل الشركات والافراد</a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/membership">الاستعلام عن  العضوية</a></li>
                                        <li class="dropdown-item" style="display:none;"><a href="https://pas.gov.kw/request">كيفية تقديم طلب بالمعلومات</a></li>
                                        <li class="dropdown-item"><a href="https://rtv.pas.gov.kw/">تقديم طلب حق إطلاع</a></li>
                                        <li class="dropdown-item has_sub_menu">
                                            <a>خاص بالموظفين <i class="fa fa-chevron-left"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/supervisors">الوظائف الاشرافية</a></li>
                                                <li class="dropdown-item"><a href="https://scr.pas.gov.kw/"> بدل الشاشة</a></li>
                                                <li class="dropdown-item"><a href="https://sd.pas.gov.kw/"> الاستبدال النقدي لرصيد الاجازات </a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/complaint"> نموذج إخلال بميثاق السلوك الوظيفي</a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/rate_employees.mp4">خطوات تقييم الموظفين من خلال نظام الديوان</a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/models">النماذج</a></li>
                                                <li class="dropdown-item"><a href="{{ route('appealForm') }}">طلب تظلم إداري</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item has_dropdown_menu">
                                    <a class="nav-link">
                                        الركن الاعلامي
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/our_news"> الأخبار</a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/media_gallery">معرض صور </a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/video_gallery">مكتبة الفيديو</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"> التطوير والتدريب </a></li>

                                <li class="nav-item has_dropdown_menu">
                                    <a class="nav-link">
                                        بنك المعلومات
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item" style="display: none;"><a href="https://pas.gov.kw/services">الخدمات وحقوق الإنتفاع للجمهور </a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/projects">البرامج والمشروعات  </a></li>
                                        <li class="dropdown-item has_sub_menu">
                                            <a>القرارات <i class="fa fa-chevron-left"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/decisions/employees">خاصة بالموظفين</a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/decisions/other">أخرى</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item has_sub_menu">
                                            <a>التعاميم <i class="fa fa-chevron-left"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/generalizations/employees">خاصة بالموظفين</a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/generalizations/sport">رياضية</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item has_sub_menu">
                                            <a>القوانين واللوائح <i class="fa fa-chevron-left"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/law">القوانين </a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/regulations">اللوائح </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item has_sub_menu">
                                            <a>الأنظمة الاساسية للهيئات الرياضية <i class="fa fa-chevron-left"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/systems/federations">الانظمة الاساسية للاتحادات الرياضية </a></li>
                                                <li class="dropdown-item"><a href="https://pas.gov.kw/systems/clubs">الانظمة الاساسية للاندية الرياضية </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/agreements">المعاهدات والإتفاقيات </a></li>
                                        <li style="display:none;" class="dropdown-item"><a href="https://pas.gov.kw/jobs">الوظائف العامة الشاغرة </a></li>
                                        <li style="display:none;" class="dropdown-item"><a href="https://pas.gov.kw/companies">الشركات </a></li>
                                        <li style="display:none;" class="dropdown-item"><a href="https://pas.gov.kw/grievances">التظلمات المقدمة من الشركات </a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/tenders">المناقصات والممارسات  </a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/plans">الخطط التدريبية </a></li>
                                        <li class="dropdown-item"><a href="https://pas.gov.kw/committees">اللجان والفرق </a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="https://pas.gov.kw/contact"> اتصل بنا</a></li>
                            </ul>
                        </div>

                        <div class="mobile_nav__wrapper">
                            <button class="navbar-toggler mobile_menu_toggler" type="button">
                                <i class="fa fa-bars"></i>
                            </button>             
                        </div>
                    </div>   
                </div>
            </div>
    </header>

    <body class="font-sans antialiased">
   
            <!-- Page Content -->
            <main> 
                @yield('content')
            </main>
     
    </body>
 </html>
