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
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const projectRows = document.querySelectorAll('.project-row');
            const noResultsMessage = document.getElementById('noResultsMessage');

            searchInput.addEventListener('input', function() {
                const searchTerm = searchInput.value.toLowerCase();
                let foundResults = false;

                projectRows.forEach(row => {
                    const projectNaam = row.querySelector('.project-item:nth-child(1)').textContent
                        .toLowerCase();
                    const bedrijf = row.querySelector('.project-item:nth-child(2)').textContent
                        .toLowerCase();
                    const contactpersoon = row.querySelector('.project-item:nth-child(3)')
                        .textContent.toLowerCase();

                    if (projectNaam.includes(searchTerm) || bedrijf.includes(searchTerm) ||
                        contactpersoon.includes(searchTerm)) {
                        row.style.display = 'flex';
                        foundResults = true;
                    } else {
                        row.style.display = 'none';
                    }
                });

                if (!foundResults) {
                    noResultsMessage.style.display = 'block';
                } else {
                    noResultsMessage.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
