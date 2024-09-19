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

      <!-- procedures guide CSS -->
      <link href="{{ url('/procedures-guide.css') }}" rel="stylesheet">
      
    <!-- download icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Include the jsPDF library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body>
<div class="pages__breadcrumb">
    <div class="container">
        <h3 class="inner__title">دليل الإجراءات</h3>
    </div>
</div>


<div class="inner_pages_wrapper">
    <div class="container">
    <form method="POST" action="{{ route('update-procedure-details', ['procedure' => $procedure->id]) }}">
        @csrf
        @method('PUT') <!-- This line specifies a PUT request -->

            <div class="col-12">
                @if ($procedure->observation->division->administration->sector)
                    <label>القطاع : </label>
                    <input class="form-control" style="width: 90%;" value="{{ $procedure->observation->division->administration->sector->name }}" readonly></input>
                @endif
                <br>
                <br>
                @if ($procedure->observation->division->administration)
                    <label>الإدارة :</label>
                    <input class="form-control" style="width: 90%;" value="{{ $procedure->observation->division->administration->name }}" readonly></input>
                @endif
                <br>
                <br>
                @if ($procedure->observation)
                    <label>القسم : </label>
                    <input class="form-control" style="width: 90%;" value="{{ $procedure->observation->name }}" readonly ></input>
                @endif
                <br>
                <br>
                <label>الإجراء : </label>
                <input class="form-control" style="width: 90%;" value="{{ $procedure->procedure_name }}" readonly></input>
                <br>
                <br>
                <div class="form-group">
                    <label for="procedure-content"> نص الإجراء : </label>
                    <textarea class="form-control" id="procedure-content" rows="5" >{{ $procedure->procedure_content }}</textarea>
                </div>
                <div class="form-group">
                <button type="button" class="btn btn-success" onclick="saveContent()">حفظ التغييرات</button>
                    <br><br>
                    <button class="btn btn-primary" onclick="downloadPDF()">تحميل PDF</button>
                </div>
                    
            
            </div>
        </form>
    </div>
</div>

</body>
<script>
  
    // Function to download PDF
    function downloadPDF() {
        // save the procedure content
        const content = $('#procedure-content').val();
        const saveWindow = window.open('', '', 'width=600,height=600');
        saveWindow.document.open();
        saveWindow.document.write('<pre>' + content + '</pre>');
        saveWindow.document.close();
        saveWindow.print();
        saveWindow.close();
    }

    function saveContent() {
    const content = $('#procedure-content').val();
    const procedureId = {{ $procedure->id }};
    const csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Check if content already exists
    const contentExists = {{ $procedure->procedure_content ? 'true' : 'false' }};

    let requestType = 'POST'; // Default to POST

    if (contentExists) {
        // Content exists, so we want to update (use PUT)
        requestType = 'PUT';
    }

    $.ajax({
        type: requestType, // Use either POST or PUT
        data: {
            updatedContent: content,
            procedureId: procedureId,
        },
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        },
        success: function (response) {
            alert("تم حفظ التغييرات بنجاح !");
            location.reload();
        },
        error: function (xhr) {
            console.error(xhr.responseText);
            alert(" لقد حصل خطأ أثناء حفظ التغييرات !");
        }
    });
}




   
</script>
</html>
