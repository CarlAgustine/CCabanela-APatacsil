<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Section System</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Student Section System</h1>
            <nav>
                <a href="{{ route('students.index') }}" class="px-3 hover:underline">Students</a>
                <a href="{{ route('sections.index') }}" class="px-3 hover:underline">Sections</a>
            </nav>
        </div>
    </header>

    <!-- Main -->
    <main class="container mx-auto p-6 flex-grow">
        @yield('content')
    </main>

    <!-- Footer  -->
    <footer class="bg-gray-800 text-white text-center py-3">
        <p>&copy; {{ date('Y') }} Cabanela Student Section System. imissu :[.</p>
    </footer>

</body>
</html>
