<div class="min-h-full">
    <div class="w-full rounded-lg p-0 sm:p-6 relative overflow-hidden">
        <!-- Clean title with logo blue -->
        <h2 class="text-2xl font-bold text-center mb-6 text-[#00A3E0] mt-6">🌊 Staff Management</h2>

        <!-- Add Staff Button -->
        <div class="mb-6 px-6 sm:px-0 ml-4">
            <button onclick="showAddStaffModal()"
                    class="bg-[#00A3E0] text-white py-2.5 px-6 rounded-lg font-medium 
                           transform transition-all duration-200 hover:-translate-y-1 
                           hover:shadow-lg hover:bg-[#0093CC]">
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Staff
                </span>
            </button>
        </div>

        <!-- Staff Table -->
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle px-4">
                    <div class="overflow-hidden border border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-[#00A3E0]">
                                <tr>
                                    <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-white uppercase">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-white uppercase hidden sm:table-cell">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-right text-xs font-semibold text-white uppercase pr-12">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Edbert -->
                                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                            Edbert
                                                </div>
                                                <!-- Show email on mobile -->
                                                <div class="text-sm text-gray-500 sm:hidden">
                                            edbertetchon@gmail.com
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap hidden sm:table-cell">
                                                <div class="text-sm text-gray-500">
                                            edbertetchon@gmail.com
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                                <div class="flex justify-end space-x-2">
                                            <button onclick="showEditStaffModal('Edbert', 'edbertetchon@gmail.com')"
                                                            class="inline-flex items-center px-3 py-1.5
                                                                   bg-[#00A3E0] hover:bg-[#0093CC] text-white 
                                                                   rounded-lg transition-all duration-200 text-sm
                                                                   shadow hover:shadow-md transform hover:-translate-y-0.5">
                                                        <span class="hidden sm:inline">Edit</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                        </svg>
                                                    </button>
                                            <button onclick="showDeleteModal('Edbert')"
                                                    class="inline-flex items-center px-3 py-1.5
                                                           bg-red-500 hover:bg-red-600 text-white 
                                                           rounded-lg transition-all duration-200 text-sm
                                                           shadow hover:shadow-md transform hover:-translate-y-0.5">
                                                <span class="hidden sm:inline">Delete</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Rodrigo -->
                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            Rodrigo
                                        </div>
                                        <!-- Show email on mobile -->
                                        <div class="text-sm text-gray-500 sm:hidden">
                                            rodrigosarang@gmail.com
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap hidden sm:table-cell">
                                        <div class="text-sm text-gray-500">
                                            rodrigosarang@gmail.com
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <div class="flex justify-end space-x-2">
                                            <button class="inline-flex items-center px-3 py-1.5
                                                       bg-[#00A3E0] hover:bg-[#0093CC] text-white 
                                                       rounded-lg transition-all duration-200 text-sm
                                                       shadow hover:shadow-md transform hover:-translate-y-0.5">
                                                <span class="hidden sm:inline">Edit</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </button>
                                            <button onclick="showDeleteModal('Rodrigo')"
                                                    class="inline-flex items-center px-3 py-1.5
                                                           bg-red-500 hover:bg-red-600 text-white 
                                                           rounded-lg transition-all duration-200 text-sm
                                                           shadow hover:shadow-md transform hover:-translate-y-0.5">
                                                <span class="hidden sm:inline">Delete</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- June Rhyll -->
                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            June Rhyll
                                        </div>
                                        <!-- Show email on mobile -->
                                        <div class="text-sm text-gray-500 sm:hidden">
                                            junerhylldahuya@gmail.com
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap hidden sm:table-cell">
                                        <div class="text-sm text-gray-500">
                                            junerhylldahuya@gmail.com
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <div class="flex justify-end space-x-2">
                                            <button class="inline-flex items-center px-3 py-1.5
                                                       bg-[#00A3E0] hover:bg-[#0093CC] text-white 
                                                       rounded-lg transition-all duration-200 text-sm
                                                       shadow hover:shadow-md transform hover:-translate-y-0.5">
                                                <span class="hidden sm:inline">Edit</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </button>
                                            <button onclick="showDeleteModal('June Rhyll')"
                                                            class="inline-flex items-center px-3 py-1.5
                                                                   bg-red-500 hover:bg-red-600 text-white 
                                                                   rounded-lg transition-all duration-200 text-sm
                                                                   shadow hover:shadow-md transform hover:-translate-y-0.5">
                                                        <span class="hidden sm:inline">Delete</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="flex justify-center items-center w-full h-full">
            <div class="w-full max-w-md">
                <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg shadow-lg">
                    <div class="p-6">
                        <div class="mb-4">
                            <h3 class="text-xl font-bold text-gray-900">Confirm Delete</h3>
                            <p class="mt-2 text-gray-600">Are you sure you want to delete this staff? This action cannot be undone.</p>
                        </div>
                        <div class="flex space-x-3">
                            <button id="cancelDelete" type="button" onclick="hideDeleteModal()"
                                class="w-full bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-medium
                                       transform transition-all duration-200 hover:-translate-y-1 
                                       hover:shadow-md hover:bg-gray-300">
                                Cancel
                            </button>
                            <button id="confirmDelete" type="button" onclick="hideDeleteModal()"
                                class="w-full bg-red-500 text-white px-4 py-2 rounded-lg font-medium
                                   transform transition-all duration-200 hover:-translate-y-1 
                                   hover:shadow-md hover:bg-red-600">
                                Delete
                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Staff Modal -->
    <div id="addStaffModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="flex justify-center items-center w-full h-full">
            <div class="w-full max-w-md bg-white rounded-lg shadow-xl p-6 relative overflow-hidden">
                <!-- Decorative wave elements -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-400 via-blue-500 to-cyan-400"></div>
                
                <!-- Water-themed title -->
                <h2 class="text-2xl font-bold text-center mb-6 text-blue-800">🌊 Add Staff</h2>

                <form class="space-y-4">
                    <!-- Name -->
                    <div>
                        <label for="name" class="text-blue-800 font-medium text-sm">Name</label>
                        <input type="text" 
                               id="name" 
                               class="block mt-1 w-full text-sm rounded-md border-blue-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm" 
                               required 
                               autofocus>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="text-blue-800 font-medium text-sm">Email</label>
                        <input type="email" 
                               id="email" 
                               class="block mt-1 w-full text-sm rounded-md border-blue-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm" 
                               required>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="text-blue-800 font-medium text-sm">Password</label>
                        <input type="password" 
                               id="password" 
                               class="block mt-1 w-full text-sm rounded-md border-blue-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                               required>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="text-blue-800 font-medium text-sm">Confirm Password</label>
                        <input type="password" 
                               id="password_confirmation" 
                               class="block mt-1 w-full text-sm rounded-md border-blue-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                               required>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <button type="button"
                                onclick="hideAddStaffModal()"
                                class="bg-[#FF8C00] text-white px-4 py-2 rounded-md text-sm
                                       transform transition-all duration-200 hover:-translate-y-1 
                                       hover:shadow-md hover:bg-[#E67E00]">
                            Cancel
                        </button>

                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 transition-colors duration-200 
                                       rounded-md px-4 py-2 text-sm text-white">
                            Register
                        </button>
                    </div>
                </form>

                <!-- Decorative bottom wave -->
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-400 via-blue-500 to-cyan-400"></div>
            </div>
        </div>
    </div>

    <!-- Edit Staff Modal -->
    <div id="editStaffModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="flex justify-center items-center w-full h-full">
            <div class="w-full max-w-md bg-white rounded-lg shadow-xl p-6 relative overflow-hidden">
                <!-- Decorative wave elements -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-400 via-blue-500 to-cyan-400"></div>
                
                <!-- Water-themed title -->
                <h2 class="text-2xl font-bold text-center mb-6 text-blue-800">🌊 Edit Staff</h2>

                <form class="space-y-4">
                    <!-- Name -->
                    <div>
                        <label for="edit_name" class="text-blue-800 font-medium text-sm">Name</label>
                        <input type="text" 
                               id="edit_name" 
                               class="block mt-1 w-full text-sm rounded-md border-blue-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm" 
                               required 
                               autofocus>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="edit_email" class="text-blue-800 font-medium text-sm">Email</label>
                        <input type="email" 
                               id="edit_email" 
                               class="block mt-1 w-full text-sm rounded-md border-blue-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm" 
                               required>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="edit_password" class="text-blue-800 font-medium text-sm">New Password</label>
                        <input type="password" 
                               id="edit_password" 
                               class="block mt-1 w-full text-sm rounded-md border-blue-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="edit_password_confirmation" class="text-blue-800 font-medium text-sm">Confirm New Password</label>
                        <input type="password" 
                               id="edit_password_confirmation" 
                               class="block mt-1 w-full text-sm rounded-md border-blue-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <button type="button"
                                onclick="hideEditStaffModal()"
                                class="bg-[#FF8C00] text-white px-4 py-2 rounded-md text-sm
                                       transform transition-all duration-200 hover:-translate-y-1 
                                       hover:shadow-md hover:bg-[#E67E00]">
                            Cancel
                        </button>

                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 transition-colors duration-200 
                                       rounded-md px-4 py-2 text-sm text-white">
                            Save Changes
                        </button>
                    </div>
                </form>

                <!-- Decorative bottom wave -->
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-400 via-blue-500 to-cyan-400"></div>
            </div>
        </div>
    </div>

<script>
function showDeleteModal(staffName) {
    document.getElementById('deleteModal').classList.remove('hidden');
    document.getElementById('deleteModal').classList.add('flex');
}

function hideDeleteModal() {
    document.getElementById('deleteModal').classList.remove('flex');
    document.getElementById('deleteModal').classList.add('hidden');
}

function showAddStaffModal() {
    document.getElementById('addStaffModal').classList.remove('hidden');
    document.getElementById('addStaffModal').classList.add('flex');
}

function hideAddStaffModal() {
    document.getElementById('addStaffModal').classList.remove('flex');
    document.getElementById('addStaffModal').classList.add('hidden');
}

function showEditStaffModal(name, email) {
    document.getElementById('editStaffModal').classList.remove('hidden');
    document.getElementById('editStaffModal').classList.add('flex');
    document.getElementById('edit_name').value = name;
    document.getElementById('edit_email').value = email;
}

function hideEditStaffModal() {
    document.getElementById('editStaffModal').classList.remove('flex');
    document.getElementById('editStaffModal').classList.add('hidden');
}

// Close modals when clicking outside
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners for delete modal buttons
    const cancelDeleteBtn = document.getElementById('cancelDelete');
    const confirmDeleteBtn = document.getElementById('confirmDelete');
    const deleteModal = document.getElementById('deleteModal');

    if (cancelDeleteBtn) {
        cancelDeleteBtn.addEventListener('click', hideDeleteModal);
    }

    if (confirmDeleteBtn) {
        confirmDeleteBtn.addEventListener('click', function() {
            // Here you would typically handle the delete action
            hideDeleteModal();
        });
    }

    if (deleteModal) {
        deleteModal.addEventListener('click', function(e) {
            if (e.target === this) {
                hideDeleteModal();
            }
        });
    }

    // Add Staff Modal
    const addStaffModal = document.getElementById('addStaffModal');
    if (addStaffModal) {
        addStaffModal.addEventListener('click', function(e) {
            if (e.target === this) {
                hideAddStaffModal();
            }
        });
    }

    // Edit Staff Modal
    const editStaffModal = document.getElementById('editStaffModal');
    if (editStaffModal) {
        editStaffModal.addEventListener('click', function(e) {
            if (e.target === this) {
                hideEditStaffModal();
            }
        });
    }
});
</script>
</div>
