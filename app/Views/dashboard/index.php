<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>
<div class="p-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-700"><?= esc($header) ?></h1>
        <!-- Button to Open Modal -->
        <button onclick="openModal()" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span>Create Dormitory</span>
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 text-left text-sm">
            <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="py-2 px-4">Date Created</th>
                <th class="py-2 px-4">Name of Dormitory</th>
                <th class="py-2 px-4">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b hover:bg-gray-100">
                <td class="py-2 px-4">2024-03-11</td>
                <td class="py-2 px-4">Carpio's Dormitory</td>
                <td class="py-2 px-4 space-x-2">
                    <a href="/edit/1" class="text-blue-500 hover:underline">Edit</a>
                    <a href="/delete/1" class="text-red-500 hover:underline">Delete</a>
                    <a href="/view/1" class="text-green-500 hover:underline">View</a>
                </td>
            </tr>
            <tr class="border-b hover:bg-gray-100">
                <td class="py-2 px-4">2024-03-12</td>
                <td class="py-2 px-4">Relleve's Dormitory</td>
                <td class="py-2 px-4 space-x-2">
                    <a href="/edit/2" class="text-blue-500 hover:underline">Edit</a>
                    <a href="/delete/2" class="text-red-500 hover:underline">Delete</a>
                    <a href="/view/2" class="text-green-500 hover:underline">View</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<!-- Modal -->
<div id="createModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <h2 class="text-xl font-bold mb-4 text-center">Add Dormitory</h2>
        <form method="POST" action="/create-dormitory">
            <div class="mb-4">
                <label for="dormitory_name" class="block text-sm font-medium text-gray-700">Dormitory:</label>
                <input type="text" name="dormitory_name" id="dormitory_name" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="dormitory_owner" class="block text-sm font-medium text-gray-700">Dormitory Owner:</label>
                <input type="text" name="dormitory_owner" id="dormitory_owner" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="contact_no" class="block text-sm font-medium text-gray-700">Contact No:</label>
                <input type="text" name="contact_no" id="contact_no" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
                <input type="text" name="address" id="address" required
                    class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="closeModal()" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                    Cancel
                </button>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>


<script>
    function openModal() {
        document.getElementById('createModal').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('createModal').classList.add('hidden');
    }
</script>
<?= $this->endSection() ?>
