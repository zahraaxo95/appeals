@extends('layouts.app')

@section('content')
<div class="form-container">
    <div class="pages__breadcrumb">
        
        
    </div>
    <div class="container" style='height: 200px;
        margin: 50px;
        border: 1px solid;
        background-color: white;'>
        <form method="POST" class="company__form ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" action="{{ route('login') }}" >
            @csrf
            <h3 >نظام التطوير و التدريب</h3>
                <div class="form-group row"> 
                    <input class="form-control col-sm-5" id="email" name="email" type="email" placeholder="البريد الالكتروني">
                    
                </div>
                <div class="form-group row">
                    
                    <input class="form-control col-sm-5" id="password" name="password" type="password" placeholder="كلمة المرور ">
                   
                </div>

                <div class="form_btns__wrapper">
                    <button type="submit" class="regiter__btn">دخول</button>
                </div>

            </form>
    </div>
</div>



@endsection