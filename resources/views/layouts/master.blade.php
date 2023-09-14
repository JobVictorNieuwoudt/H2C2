<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H2C2 Technical</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Custom CSS Styles -->
{{--    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">--}}

</head>
<body>
<header>
    <!-- Add Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">H2C2 Technical</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stores.index') }}">Stores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product-sales.index') }}">Product Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sales.totalProductsSold') }}">Sale Listings</a>
                </li>
            </ul>
        </div>
    </nav>

</header>

<main class="container mt-4">
    @yield('content')
</main>

<footer class="text-center mt-4">
    {{-- Your footer content --}}
</footer>

<!-- Include Bootstrap JavaScript (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
{{-- Include your custom JS scripts if any --}}
</body>
</html>
