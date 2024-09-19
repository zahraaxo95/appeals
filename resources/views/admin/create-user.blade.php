<!DOCTYPE html>
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
      
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body>
<div class="pages__breadcrumb">
    <div class="container">
        <h3 class="inner__title">إضافة مستخدم جديد</h3>
    </div>
    
</div>

    <div>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">العودة إلى لوحة التحكم</a>
    </div>
    <br/></br>
<div class="form-container">
<form method="POST" action="{{ route('create-user') }}">
    @csrf


            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">الاسم</label>
                <div class="col-sm-5">
                    <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">البريد الإلكتروني</label>
                <div class="col-sm-5">
                    <input id="email" class="form-control"  type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">كلمة السر</label>
                <div class="col-sm-5">
                    <input id="password" class="form-control"  type="password" name="password" required autocomplete="new-password" />
                </div>
            </div>


            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">الصلاحيات </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="userTypeUser" value="user">
                    <label class="form-check-label" for="userTypeUser">User</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="userTypeAdmin" value="admin">
                    <label class="form-check-label" for="userTypeAdmin">Admin</label>
                </div>
            </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
        </div>
    </div>
</form>

</div>

</body>
</html>
