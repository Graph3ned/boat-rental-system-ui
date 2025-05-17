<div class="p-6">
    <h1 class="text-2xl font-bold text-center mb-6 text-[#00A3E0]">Edit Ride</h1>

    <form>
        {{-- Text input: Staff name/ID --}}
        <div class="mb-4">
            <label for="user" class="block text-sm font-medium text-gray-700">Staff</label>
            <input type="text" 
                    id="user" 
                    value="John Doe"
                    class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                            focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
        </div>

        {{-- Select: Ride type --}}
        <div class="mb-4">
            <label for="rideType" class="block text-sm font-medium text-gray-700">Ride Type</label>
            <select id="rideType" 
                class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                <option value="jet_ski" selected>Jet Ski</option>
                <option value="banana_boat">Banana Boat</option>
                <option value="parasailing">Parasailing</option>
            </select>
        </div>

        {{-- Select: Classification --}}
        <div class="mb-4">
            <label for="classification" class="block text-sm font-medium text-gray-700">Classification</label>
            <select id="classification" 
                class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                <option value="regular" selected>Regular</option>
                <option value="premium">Premium</option>
                <option value="vip">VIP</option>
            </select>
        </div>

        {{-- Select: Life jacket usage --}}
        <div class="mb-4">
            <label for="life_jacket_usage" class="block text-sm font-medium text-gray-700">Life Jacket Usage</label>
            <select id="life_jacket_usage" 
                class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                <option value="2" selected>2</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        {{-- Number input: Total price --}}
        <div class="mb-4">
            <label for="totalPrice" class="block text-sm font-medium text-gray-700">Total Price</label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">₱</span>
                <input type="number" 
                       id="totalPrice" 
                       value="1500"
                       class="pl-8 block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                              focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50"
                       min="0">
            </div>
        </div>

        {{-- Note textarea input --}}
        <div class="mb-4">
            <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
            <textarea
                id="note"
                class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                       focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50"
                rows="3"
            >Morning ride</textarea>
        </div>

        <div class="flex space-x-4">
            <button type="button" 
                class="w-full bg-[#FF8C00] text-white px-5 py-2.5 rounded-lg font-medium
                       transform transition-all duration-200 hover:-translate-y-1 
                       hover:shadow-md hover:bg-[#E67E00]">
                Cancel
            </button>

            <button type="submit"
                class="w-full bg-[#00A3E0] text-white py-2.5 px-5 rounded-lg font-medium 
                       transform transition-all duration-200 hover:-translate-y-1 
                       hover:shadow-md hover:bg-[#0093CC]">
                Save
            </button>
        </div>
    </form>
</div>
