<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>
<div class="p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-700">Criteria</h1>
        <div class="flex space-x-2">
            <button onclick="addRow()" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 flex items-center space-x-2">
                <i class="fas fa-plus"></i>
                <span>Add Row</span>
            </button>
            <button onclick="addColumn()" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 flex items-center space-x-2">
                <i class="fas fa-columns"></i>
                <span>Add Column</span>
            </button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table id="criteriaTable" class="min-w-full border border-gray-300 text-left text-sm">
            <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="py-2 px-4 text-center bg-red-600 text-white">Criteria</th>
                <th class="py-2 px-4 text-center bg-red-600 text-white">Completely Acceptable (4)</th>
                <th class="py-2 px-4 text-center bg-red-600 text-white">Acceptable (3)</th>
                <th class="py-2 px-4 text-center bg-red-600 text-white">Slightly Acceptable (2)</th>
                <th class="py-2 px-4 text-center bg-red-600 text-white">Unacceptable (1)</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b hover:bg-gray-100">
                <td class="py-2 px-4 text-center">
                    <input type="text" class="border border-gray-300 rounded px-2 py-1 w-full" placeholder="Enter Criteria">
                </td>
                <td class="py-2 px-4 text-center">
                    <input type="text" class="border border-gray-300 rounded px-2 py-1 w-full" placeholder="Enter Description">
                </td>
                <td class="py-2 px-4 text-center">
                    <input type="text" class="border border-gray-300 rounded px-2 py-1 w-full" placeholder="Enter Description">
                </td>
                <td class="py-2 px-4 text-center">
                    <input type="text" class="border border-gray-300 rounded px-2 py-1 w-full" placeholder="Enter Description">
                </td>
                <td class="py-2 px-4 text-center">
                    <input type="text" class="border border-gray-300 rounded px-2 py-1 w-full" placeholder="Enter Description">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    // Function to add a new row
    function addRow() {
        const table = document.getElementById('criteriaTable').querySelector('tbody');
        const columns = table.querySelector('tr').children.length;
        let newRow = `<tr class="border-b hover:bg-gray-100">`;
        for (let i = 0; i < columns; i++) {
            newRow += `
                <td class="py-2 px-4 text-center">
                    <input type="text" class="border border-gray-300 rounded px-2 py-1 w-full" placeholder="Enter Value">
                </td>
            `;
        }
        newRow += `</tr>`;
        table.insertAdjacentHTML('beforeend', newRow);
    }

    // Function to add a new column
    function addColumn() {
        const table = document.getElementById('criteriaTable');
        const headerRow = table.querySelector('thead tr');
        const rows = table.querySelectorAll('tbody tr');

        // Add column to header
        const newHeader = document.createElement('th');
        newHeader.className = 'py-2 px-4 text-center bg-red-600 text-white';
        newHeader.innerText = 'New Column';
        headerRow.appendChild(newHeader);

        // Add column to each row
        rows.forEach(row => {
            const newCell = document.createElement('td');
            newCell.className = 'py-2 px-4 text-center';
            newCell.innerHTML = `<input type="text" class="border border-gray-300 rounded px-2 py-1 w-full" placeholder="Enter Value">`;
            row.appendChild(newCell);
        });
    }
</script>
<?= $this->endSection() ?>
