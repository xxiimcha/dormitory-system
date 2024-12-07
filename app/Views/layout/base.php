<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Dashboard') ?></title>
    <link rel="stylesheet" href="/output.css">


    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-10 w-64 bg-gray-800 text-white transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
            <div class="flex items-center justify-between p-4 border-b border-gray-700">
                <h2 class="text-lg font-bold">Dormitory System</h2>
                <button class="md:hidden text-white" onclick="toggleSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="p-4 space-y-2">
                <a href="/dashboard" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a>
                <a href="/set-criteria" class="block py-2 px-4 rounded hover:bg-gray-700">Set Criteria</a>
                <a href="/inspection" class="block py-2 px-4 rounded hover:bg-gray-700">Inspection</a>
                <a href="/evaluation" class="block py-2 px-4 rounded hover:bg-gray-700">Evaluation</a>
                <a href="/approval" class="block py-2 px-4 rounded hover:bg-gray-700">Approval</a>
                <a href="/monitoring" class="block py-2 px-4 rounded hover:bg-gray-700">Monitoring</a>
            </nav>
            <div class="mt-auto p-4">
                <a href="/logout" class="block w-full text-center bg-red-500 py-2 px-4 rounded hover:bg-red-600">
                    Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-0 md:ml-64 transition-all duration-300 ease-in-out">
            <!-- Header -->
            <header class="bg-gray-700 text-white p-4 shadow-md flex justify-between items-center">
                <button class="md:hidden text-white" onclick="toggleSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h14M3 12h14M3 19h14" />
                    </svg>
                </button>
                <h1 class="text-xl font-bold"><?= esc($header ?? 'Dashboard') ?></h1>
            </header>

            <!-- Page Content -->
            <div class="p-6">
                <?= $this->renderSection('content') ?>
            </div>
        </main>
    </div>
</body>
</html>
