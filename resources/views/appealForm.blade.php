@extends('layouts.app')

@section('content')

<div class="pages__breadcrumb">
    <div class="container">
        <h3 class="inner__title">نموذج تظلم إداري</h3>                
    </div>
</div>

<div class="company_wrapper" style="padding: 20px 0;">
    <div class="container">
        <form action="{{ route('appeal.form.store') }}" method="post" class="company__form" enctype="multipart/form-data">
        @csrf

            <!-- form fields go here -->

            <div class="form-group row">
                <label for="civilId" class="col-sm-2 col-form-label">  الرقم المدني :</label>
                <div class="col-sm-4">
                    <input class="form-control" id="civilId" name="civilId" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="fullname" class="col-sm-2 col-form-label">  الإسم :</label>
                <div class="col-sm-4">
                    <input class="form-control" id="fullname" name="fullname" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">  رقم الهاتف :</label>
                <div class="col-sm-4">
                    <input class="form-control" id="phone" name="phone" type="text">
                </div>
            </div>
            <div class="form-group row">
    <label for="appeal_reason" class="col-sm-2 col-form-label">سبب طلب التظلم :</label>
    <div class="col-sm-5">
        <select class="form-control" id="appeal_reason" name="appeal_reason">
            <option value="">اختر سبب التظلم</option>
            <option value="assessment">تقييم الكفاءة</option>
            <option value="Promotion">الترقية بالإختيار</option>
            <option value="Supervisory">الوظيفة الإشرافية</option>
            <option value="punishment">عقوبة تأديبية</option>
            <option value="other">سبب اخر</option>
        </select>
    </div>
</div>

<!-- Conditional fields based on selected option -->
<div class="conditional-fields">
    <div id="assessment-fields" style="display: none;">
        <div class="form-group row">
            <label for="acknowledgement_date" class="col-sm-2 col-form-label">تاريخ العلم بالتقييم :</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" id="acknowledgement_date" name="acknowledgement_date" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="assessment_value" class="col-sm-2 col-form-label">تقدير الكفاءة :</label>
            <div class="col-sm-5">
                <input class="form-control" id="assessment_value" name="assessment_value" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="cv" class="col-sm-2 col-form-label">السيرة الذاتية :</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" id="cv" name="cv" required accept="application/pdf">
            </div>
        </div>
        <div class="form-group row">
            <label for="career_progression" class="col-sm-2 col-form-label">التدرج الوظيفي :</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" id="career_progression" name="career_progression" required accept="application/pdf">
            </div>
        </div>
    </div>
    <div id="promotion-fields" style="display: none;">
        <div class="form-group row">
            <label for="promotion_decision" class="col-sm-2 col-form-label">رقم قرار الترقية :</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="promotion_decision" name="promotion_decision" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="cv" class="col-sm-2 col-form-label">السيرة الذاتية :</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" id="cv" name="cv" required accept="application/pdf">
            </div>
        </div>
        <div class="form-group row">
            <label for="career_progression" class="col-sm-2 col-form-label">تطوير المهنة :</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" id="career_progression" name="career_progression" required accept="application/pdf">
            </div>
        </div>
        <div class="form-group row">
            <label for="promotion_decision_copy" class="col-sm-2 col-form-label">نسخة من قرار الترقية :</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" id="promotion_decision_copy" name="promotion_decision_copy" accept="application/pdf">
            </div>
        </div>
    </div>
    <div id="supervisory-fields" style="display: none;">
        <div class="form-group row">
            <label for="supervisory_decision" class="col-sm-2 col-form-label">رقم قرار الوظيفة الإشرافية :</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="supervisory_decision" name="supervisory_decision" required>
            </div>
        </div>
        <div class="form-group row">
        <label for="supervisory_job" class="col-sm-2 col-form-label">اسم الوظيفة الإشرافية</label>
        
            <div class="col-sm-5">
                    <input type="text" class="form-control" id="supervisory_job" name="supervisory_job" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="cv" class="col-sm-2 col-form-label">السيرة الذاتية :</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="cv" name="cv" required accept="application/pdf">
                </div>
            </div>
            <div class="form-group row">
                <label for="career_progression" class="col-sm-2 col-form-label">تطوير المهنة :</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="career_progression" name="career_progression" required accept="application/pdf">
                </div>
            </div>
            <div class="form-group row">
                <label for="supervisory_decision_copy" class="col-sm-2 col-form-label">نسخة من قرار الوظيفة الإشرافية :</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="supervisory_decision_copy" name="supervisory_decision_copy" accept="application/pdf">
                </div>
            </div>
        </div>
        <div id="punishment-fields" style="display: none;">
            <div class="form-group row">
                <label for="punishment_decision" class="col-sm-2 col-form-label">رقم قرار العقوبة :</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="punishment_decision" name="punishment_decision" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="punishment_name" class="col-sm-2 col-form-label">اسم العقوبة :</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="punishment_name" name="punishment_name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="punishment_decision_copy" class="col-sm-2 col-form-label">نسخة من قرار العقوبة :</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="punishment_decision_copy" name="punishment_decision_copy" required accept="application/pdf">
                </div>
            </div>
        </div>
        <div id="other-fields" style="display: none;">
            <div class="form-group row">
                <label for="other_attachment1" class="col-sm-2 col-form-label">مرفق 1 :</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="other_attachment1" name="other_attachment1" accept="application/pdf">
                </div>
            </div>
            <div class="form-group row">
                <label for="other_attachment2" class="col-sm-2 col-form-label">مرفق 2 :</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="other_attachment2" name="other_attachment2" accept="application/pdf">
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
        $('#appeal_reason').on('change', function() {
            var selectedOption = $(this).val();
            $('.conditional-fields > div').hide();
            $('#' + selectedOption + '-fields').show();
        });
    });

        $(document).ready(function() {
    $('#select-field').on('change', function() {
        var selectedOption = $(this).val();

        $('#assessment-fields').hide();
        $('#career_progression-fields').hide();
        $('#punishment-fields').hide();
        $('#supervisory-fields').hide();
        $('#promotion-fields').hide();
        $('#other-fields').hide();

        if (selectedOption == 'assessment') {
            $('#assessment-fields').show();
        } else if (selectedOption == 'career_progression') {
            $('#career_progression-fields').show();
        } else if (selectedOption == 'punishment') {
            $('#punishment-fields').show();
        } else if (selectedOption == 'supervisory') {
            $('#supervisory-fields').show();
        } else if (selectedOption == 'promotion') {
            $('#promotion-fields').show();
        } else if (selectedOption == 'other') {
            $('#other-fields').show();
        }
    });
});
    </script>
            <!-- other form fields go here -->

            <div class="form_btns__wrapper">
            <button type="submit" class="regiter__btn">إرسال</button>
        </div>

        </form>
    </div>
</div>

@endsection