<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sticky footer */
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1 0 auto; /* main content grows and pushes footer down */
        }
        footer {
            flex-shrink: 0; /* footer does not shrink */
        }
    </style>
</head>
<body>
    <div class="content container mt-5">
        @yield('content')
    </div>

    <!-- Sticky Footer -->
    <footer class="bg-light text-center text-muted py-3 border-top">
        Developed by Mehedi Ahmed
    </footer>
</body>
</html>
