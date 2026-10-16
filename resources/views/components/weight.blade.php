<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Weight Tracker' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('weights.index') }}">⚖️ ติดตามน้ำหนักร่างกาย</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="{{ route('weights.index') }}">รายการ</a>
            <a class="nav-link" href="{{ route('weights.create') }}">เพิ่มข้อมูล</a>
        </div>
    </div>
</nav>

<main class="container pb-5">
    <h2 class="mb-3">{{ $title ?? '' }}</h2>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{ $slot }}
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
{{ $scripts ?? '' }}
</body>
</html>