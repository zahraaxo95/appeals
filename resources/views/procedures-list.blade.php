<!DOCTYPE html>
<html lang="ar">
<head> 
         <!-- Required meta tags -->
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link href="https://pas.gov.kw/interface/css/simple-lightbox.min.css" rel="stylesheet"/>
        <link href="https://pas.gov.kw/interface/css/animate.min.css" rel="stylesheet" />
        <link href="https://pas.gov.kw/interface/css/hover.css" rel="stylesheet">
        <link href="https://pas.gov.kw/interface/css/slick.css" rel="stylesheet">
        <link href="https://pas.gov.kw/interface/css/slick-theme.css" rel="stylesheet">
        <link href="https://pas.gov.kw/interface/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://pas.gov.kw/interface/css/main.css" rel="stylesheet">
        <link href="https://pas.gov.kw/interface/css/style-ar.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/d10920a460.js"></script>
       
      <!-- procedures guide CSS -->
      <link href="{{ url('/procedures-guide.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

</head>
<body>
<div class="pages__breadcrumb">
    <div class="container">
        <h3 class="inner__title">الإجراءات </h3>
    </div>
</div> 
<div class="inner_pages_wrapper">
    <div class="container">
        <div class="row general_row p_70_62 b_bottom">
            <div class="col-12">
                <form method="get" class="company__form">
                    <!--  search form here -->
                    
                </form>
            </div>

            @foreach ($procedures as $procedure)
            <div class="col-12">
                <a href="{{ route('procedure-details', ['procedure' => $procedure]) }}">
                    <div class="general_card" style="min-height: auto;">
                        <div class="general_body text-right">
                            {{ $procedure->procedure_name }}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>

</body>