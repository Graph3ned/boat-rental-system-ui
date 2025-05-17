<div>
<!-- Profile Forms -->
<div class="min-h-full p-4">
    <div class="w-full rounded-lg relative overflow-hidden">
        <!-- Clean title with logo blue -->
        <h2 class="text-2xl font-bold text-center mb-6 text-[#00A3E0]">🌊 Profile Management</h2>

        <div class="py-12">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <!-- Profile Information Form -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                    <!-- Card Header with gradient background -->
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                            <div class="space-y-1">
                                <h2 class="text-xl font-bold text-white">Profile Information</h2>
                                <p class="text-white/80 text-sm">Update your account's profile information and email address.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Content -->
                    <div class="p-6">
                        <form class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" id="name" name="name" value="Edbert" 
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                                           focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50" 
                                    required autofocus>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" value="edbertetchon@gmail.com" name="email" 
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                                           focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50" 
                                    required>
                            </div>

                            <div class="flex justify-start">
                                <button type="submit" 
                                    class="bg-[#00A3E0] text-white px-6 py-2.5 rounded-lg font-medium 
                                           transform transition-all duration-200 hover:-translate-y-1 
                                           hover:shadow-lg hover:bg-[#0093CC]">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Update Password Form -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                    <!-- Card Header with gradient background -->
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                            <div class="space-y-1">
                                <h2 class="text-xl font-bold text-white">Update Password</h2>
                                <p class="text-white/80 text-sm">Ensure your account is using a long, random password to stay secure.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Content -->
                    <div class="p-6">
                        <form class="space-y-6">
                            <div>
                                <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                                <input type="password" id="current_password" name="current_password" 
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                                           focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50" 
                                    autocomplete="current-password">
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                                <input type="password" id="password" name="password" 
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                                           focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50" 
                                    autocomplete="new-password">
                            </div>

                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" 
                                    class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                                           focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50" 
                                    autocomplete="new-password">
                            </div>

                            <div class="flex justify-start">
                                <button type="submit" 
                                    class="bg-[#00A3E0] text-white px-6 py-2.5 rounded-lg font-medium 
                                           transform transition-all duration-200 hover:-translate-y-1 
                                           hover:shadow-lg hover:bg-[#0093CC]">
                                    Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>


</div>

<script>
function showDeleteAccountModal() {
    const modal = document.getElementById('deleteAccountModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function hideDeleteAccountModal() {
    const modal = document.getElementById('deleteAccountModal');
    modal.classList.remove('flex');
    modal.classList.add('hidden');
}

function confirmDeleteAccount() {
    // Here you would typically handle the account deletion
    hideDeleteAccountModal();
}

// Close modal when clicking outside
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('deleteAccountModal');
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            hideDeleteAccountModal();
        }
    });
});
</script> 