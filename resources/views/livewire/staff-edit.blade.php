<div class="min-h-full p-4">
    <div class="w-full max-w-lg p-6 bg-white rounded-lg relative overflow-hidden border-double border-4 border-[#00A3E0] mx-auto">
        <!-- Clean title with logo blue -->
        <h2 class="text-2xl font-bold text-center mb-6 text-[#00A3E0]">🌊 Edit Staff</h2>

        <form wire:submit.prevent="updateStaff" class="space-y-4">
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input wire:model="name" 
                    id="name" 
                    class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50" 
                    type="text" 
                    required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input wire:model="email" 
                    id="email" 
                    class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50" 
                    type="email" 
                    required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex space-x-4">
                <button type="button" 
                    wire:navigate 
                    href="/admin/staffs"
                    class="w-full bg-[#FF8C00] text-white px-5 py-2.5 rounded-lg font-medium
                           transform transition-all duration-200 hover:-translate-y-1 
                           hover:shadow-md hover:bg-[#E67E00]">
                    Cancel
                </button>

                <button type="submit"
                    class="w-full bg-[#00A3E0] text-white py-2.5 px-5 rounded-lg font-medium 
                           transform transition-all duration-200 hover:-translate-y-1 
                           hover:shadow-md hover:bg-[#0093CC]">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div> 