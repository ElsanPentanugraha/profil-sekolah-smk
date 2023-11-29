<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title') | SMKN 1 Tamiang Layang</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- Vendor CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    @include('global.navbar')
    @yield('content')
    @include('global.footer')
    @include('sweetalert::alert')


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('message');
    </script>

    <script>
        function showImage(imageSource, imageName) {
            var modal = document.getElementById('myModal');
            var modalImg = document.getElementById('modalImage');
            var captionText = document.getElementById('caption');

            // Open the modal and set the image source
            modal.style.display = 'block';
            modalImg.src = imageSource;
            modalImg.alt = imageName;

            // Set the caption
            captionText.innerHTML = imageName;

            // Add a close button to the modal
            var span = document.getElementsByClassName('close')[0];

            // Close the modal when the close button is clicked
            span.onclick = function() {
                closeModal();
            }

            // Close the modal when clicking outside the image
            window.onclick = function(event) {
                if (event.target == modal) {
                    closeModal();
                }
            }
        }

        function closeModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = 'none';
        }
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <div id="myModal" class="gallery-modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="caption" class="caption"></div>
    </div>
</body>

</html>
