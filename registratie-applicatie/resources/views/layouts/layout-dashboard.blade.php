<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <script src="scripts.js"></script>
    <script src="https://kit.fontawesome.com/2842fd03de.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        @include('partials.sidebar-dashboard')
        <main class="content">
            @yield('content')
        </main>
    </div>

    <script>
        // Sidebar Hamburger menu + X-button
        document.querySelector('.hamburger').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.top-bar').classList.toggle('active', !document.querySelector('.sidebar')
                .classList.contains('active'));
        });

        // Put form data in database
        $(document).ready(function() {
            $('#companyForm').on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: "{{ route('form.store') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log('Form successfully submitted');
                        console.log(response);
                        alert('Form successfully submitted');
                    },
                    error: function(response) {
                        console.log('Form submission failed');
                        console.log(response);
                        alert('Form submission failed');
                    }
                });
            });
        });

        // Searchbar
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const form = searchInput.closest('form');

            searchInput.addEventListener('keyup', event => {
                if (event.key === 'Enter') {
                    const searchTerm = searchInput.value.trim();
                    if (searchTerm !== '') {
                        // Perform search based on searchTerm
                        console.log('Performing search for:', searchTerm);
                    }
                }
            });
        });
    </script>
</body>

</html>
