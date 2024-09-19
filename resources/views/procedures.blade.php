<!DOCTYPE html>

<head> 
       <html lang="ar">  <!-- Required meta tags -->
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
        <h3 class="inner__title">دليل الإجراءات</h3>
    </div>
</div>
</br></br>
<div class="sector-container">
    @foreach ($sectors as $sector)
    <div class="sector clickable" onclick="toggleSectorVisibility('sector-{{ $sector->id }}', event)">
        <span class="sector-name">{{ $sector->name }}</span>
        <div class="administrations-container" id="sector-{{ $sector->id }}" style="display: none; margin: 50px;">
            @foreach ($sector->administration as $administration)
            <div class="administration clickable" onclick="toggleAdministrationVisibility('administration-{{ $administration->id }}', event)">
                <span class="administration-name">{{ $administration->name }}</span>
                <div class="divisions-container" id="administration-{{ $administration->id }}" style="display: none;">
                @foreach ($administration->division as $division)
<div class="division">
    <!-- Display division name as a clickable button to show/hide observations -->
    <div class="division-name" onclick="toggleObservations('observations-{{ $division->id }}')">
        {{ $division->name }}
        <span class="sr-only">Toggle Dropdown</span>
</div>
    <div class="observations-container" id="observations-{{ $division->id }}" style="display: none;">
        <!-- List observations under the division -->
        <ul>
            @foreach ($division->observation as $observation)
                <li>
                    <a class="dropdown-item" href="{{ route('procedures-list', ['observation' => $observation->id]) }}">
                        {{ $observation->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endforeach


                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>

<script>
// Your JavaScript functions here
</script>


    <script>
    let openSector = null; // Variable to store the currently open sector
    let openAdministration = null; // Variable to store the currently open administration

    // JavaScript function to toggle visibility of observations
        function toggleObservations(elementId) {
            const element = document.getElementById(elementId);
            if (element.style.display === "none" || element.style.display === "") {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }

        // JavaScript function to select an observation
        function selectObservation(element) {
            var selectedUrl = element.getAttribute('data-url');
            
            if (selectedUrl) {
                window.location.href = selectedUrl; // Redirect to the specified URL
            }
        }



    // JavaScript function to toggle visibility for sectors
    function toggleSectorVisibility(elementId, event) {
        const element = document.getElementById(elementId);
        if (element.style.display === "none") {
            if (openSector) {
                openSector.style.display = "none"; // Close the previously open sector
            }
            element.style.display = "block";
            openSector = element;
            event.stopPropagation();
        } else {
            element.style.display = "none";
            openSector = null;
        }
    }

    // JavaScript function to toggle visibility for administrations
function toggleAdministrationVisibility(elementId, event) {
    event.stopPropagation(); // Stop event propagation
    const element = document.getElementById(elementId);
    if (element.style.display === "none") {
        if (openAdministration) {
            openAdministration.style.display = "none"; // Close the previously open administration
        }
        element.style.display = "block";
        openAdministration = element;
    } else {
        element.style.display = "none";
        openAdministration = null;
    }
}

   // JavaScript function to toggle visibility for divisions
    function toggleDivisionVisibility(elementId, event) {
        event.stopPropagation(); // Stop event propagation
    const element = document.getElementById(elementId);
    if (element.style.display === "none") {
        if (openDivision) {
            openDivision.style.display = "none"; // Close the previously open administration
        }
        element.style.display = "block";
        openDivision = element;
    } else {
        element.style.display = "none";
        openDivision = null;
    }
    }

    </script>
</body>
</html>