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
        <h3 class="inner__title">لوحة التحكم</h3>
    </div>
</div>


<div class="form-container">
    <a type="submit" class="btn btn-primary" href="{{route('create-user')}}">إضافة مستخدم جديد</a>
    <table class="table table-bordered">

        <thead class="thead-light">
            <tr>
                <th> </th>
                <th>الاسم</th>
                <th>البريد الإلكتروني</th>
                <th>العمليات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                    <a type="button" class="btn btn-info" href="{{ route('edit-user', ['user' => $user->id]) }}">تعديل</a>
                        <form method="POST" action="{{ route('destroy-user', ['user' => $user->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
<script>
  

   
</script>
</html>
