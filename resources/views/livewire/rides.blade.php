<div class="min-h-full">
    <div class="w-full p-4 relative">
        <!-- Clean title with logo blue -->
        <h2 class="text-2xl font-bold text-center mb-6 text-[#00A3E0]">🌊 Rides Management</h2>

        <div class="flex justify-between items-center mb-6 flex-col sm:flex-row space-y-4 sm:space-y-0">
            <div class="flex items-center space-x-4">
                <!-- Add Ride Button -->
                <button onclick="openModal('modalAddRide')"
                        class="bg-[#00A3E0] text-white py-2.5 px-6 rounded-lg font-medium 
                               transform transition-all duration-200 hover:-translate-y-1 
                               hover:shadow-lg hover:bg-[#0093CC]">
                    Add Rides
                </button>

                <!-- Ride Filter Dropdown -->
                <select class="border border-blue-200 rounded-lg px-4 py-2.5 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <option value="all">Show All Rides</option>
                    <option value="ended">Show Ended Rides</option>
                    <option value="ongoing">Show Ongoing Rides</option>
                </select>
            </div>

            <!-- Total Price Display -->
            <div class="text-center sm:text-right">
                <span class="text-lg font-semibold text-[#00A3E0] whitespace-nowrap">
                    Total Income: ₱1,500.00
                </span>
            </div>
        </div>

        <!-- Table Section -->
        <div class="rounded-lg shadow-lg border border-blue-100">
            <div class="max-h-[600px] overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100">
                <table class="w-full lg:w-full sm:min-w-max table-auto text-sm">
                    <thead class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white text-sm font-semibold sticky top-0 z-10">
                        <tr class="border-b border-blue-400">
                            <th class="px-4 py-3 text-left">No.</th>
                            <th class="px-4 py-3 text-left">Ride Type</th>
                            <th class="px-4 py-3 text-left hidden lg:table-cell">Classification</th>
                            <th class="px-4 py-3 text-left hidden sm:table-cell">Duration</th>
                            <th class="px-4 py-3 text-left hidden md:table-cell">Life Jackets</th>
                            <th class="px-4 py-3 text-left">Total</th>
                            <th class="px-4 py-3 text-left hidden md:table-cell">Start</th>
                            <th class="px-4 py-3 text-left hidden md:table-cell">End</th>
                            <th class="px-4 py-3 text-left hidden md:table-cell">Remaining</th>
                            <th class="px-4 py-3 text-left hidden lg:table-cell">Note</th>
                            <th class="px-4 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-100">
                        <!-- Sample Ride 1 -->
                        <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                            <td class="px-4 py-3 text-gray-700">1</td>
                            <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                                <div class="text-gray-700 font-bold text-lg">Crystal Kayak</div>
                                <div class="lg:hidden text-sm min-w-[150px] -mt-1">
                                    <span class="text-blue-600 font-medium">Red Rope</span>
                                </div>
                                <div class="lg:hidden space-y-1.5 mt-2">
                                    <div class="md:hidden text-xs space-y-1 mt-2">
                                        <div class="flex flex-col min-w-[150px]">
                                            <span class="text-indigo-600 font-medium">Starts: <span class="text-gray-600">09:00 AM</span></span>
                                        </div>
                                        <div class="flex flex-col min-w-[150px]">
                                            <span class="text-indigo-600 font-medium">End: <span class="text-gray-600">10:00 AM</span></span>
                                        </div>
                                        <div class="flex flex-col min-w-[150px] text-sm">
                                            <span class="text-indigo-600 font-medium">Remaining: <span class="text-gray-600 remaining-time font-bold" data-end="2024-03-15 10:00:00">1h</span></span>
                                        </div>
                                    </div>
                                    <div class="sm:hidden text-xs min-w-[150px]">
                                        <span class="text-emerald-600 font-medium">Duration:</span>
                                        <span class="text-gray-600">1hr</span>
                                    </div>
                                    <div class="md:hidden text-xs min-w-[150px]">
                                        <span class="text-emerald-600 font-medium">Jackets:</span>
                                        <span class="text-gray-600">2</span>
                                    </div>
                                    <div class="text-xs min-w-[150px]">
                                        <span class="text-purple-600 font-medium">Note:</span>
                                        <span class="text-gray-600">Morning ride</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Red Rope</td>
                            <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr</td>
                            <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">2</td>
                            <td class="px-4 py-3 text-gray-700">₱800.00</td>
                            <td class="px-4 py-3 text-gray-700 hidden md:table-cell">09:00 AM</td>
                            <td class="px-4 py-3 text-gray-700 hidden md:table-cell">10:00 AM</td>
                            <td class="px-4 py-3 text-green-600 hidden md:table-cell remaining-time" data-end="2024-03-15 10:00:00">1h</td>
                            <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Morning ride</td>
                            <td class="px-4 py-3 text-center">
                                <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                                    <button onclick="showEditRideModal()"
                                            class="transition-all duration-200 bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded-md shadow-md hover:shadow-lg">
                                        Edit
                                    </button>
                                    <button onclick="showDeleteModal()"
                                            class="transition-all duration-200 bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded-md shadow-md hover:shadow-lg">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Sample Ride 2 -->
                        <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                            <td class="px-4 py-3 text-gray-700">2</td>
                            <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                                <div class="text-gray-700 font-bold text-lg">Paddle Board</div>
                                <div class="lg:hidden text-sm min-w-[150px] -mt-1">
                                    <span class="text-blue-600 font-medium">Rubber Blue</span>
                                </div>
                                <div class="lg:hidden space-y-1.5 mt-2">
                                    <div class="md:hidden text-xs space-y-1 mt-2">
                                        <div class="flex flex-col min-w-[150px]">
                                            <span class="text-indigo-600 font-medium">Starts: <span class="text-gray-600">10:30 AM</span></span>
                                        </div>
                                        <div class="flex flex-col min-w-[150px]">
                                            <span class="text-indigo-600 font-medium">End: <span class="text-gray-600">11:30 AM</span></span>
                                        </div>
                                        <div class="flex flex-col min-w-[150px] text-sm">
                                            <span class="text-indigo-600 font-medium">Remaining: <span class="text-gray-600 remaining-time font-bold" data-end="2024-03-15 11:30:00">15m</span></span>
                                        </div>
                                    </div>
                                    <div class="sm:hidden text-xs min-w-[150px]">
                                        <span class="text-emerald-600 font-medium">Duration:</span>
                                        <span class="text-gray-600">1hr</span>
                                    </div>
                                    <div class="md:hidden text-xs min-w-[150px]">
                                        <span class="text-emerald-600 font-medium">Jackets:</span>
                                        <span class="text-gray-600">1</span>
                                    </div>
                                    <div class="text-xs min-w-[150px]">
                                        <span class="text-purple-600 font-medium">Note:</span>
                                        <span class="text-gray-600">Solo ride</span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Rubber Blue</td>
                            <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr</td>
                            <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">1</td>
                            <td class="px-4 py-3 text-gray-700">₱700.00</td>
                            <td class="px-4 py-3 text-gray-700 hidden md:table-cell">10:30 AM</td>
                            <td class="px-4 py-3 text-gray-700 hidden md:table-cell">11:30 AM</td>
                            <td class="px-4 py-3 text-green-600 hidden md:table-cell">15m</td>
                            <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Solo ride</td>
                            <td class="px-4 py-3 text-center">
                                <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                                    <button onclick="showEditRideModal()"
                                            class="transition-all duration-200 bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded-md shadow-md hover:shadow-lg">
                                        Edit
                                    </button>
                                    <button onclick="showDeleteModal()"
                                            class="transition-all duration-200 bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded-md shadow-md hover:shadow-lg">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Test Time Out Button -->
        <div class="mt-6 flex justify-center">
            <button onclick="openModal('modalConfirmAlarm')" 
                    class="bg-[#00A3E0] text-white py-2.5 px-6 rounded-lg font-medium 
                           transform transition-all duration-200 hover:-translate-y-1 
                           hover:shadow-lg hover:bg-[#0093CC]">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <span>Test Time Out</span>
                </div>
            </button>
        </div>

        <!-- Add Ride Modal -->
        <div id="modalAddRide" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="w-full max-w-lg p-6 bg-white rounded-lg relative overflow-hidden border-double border-4 border-[#00A3E0]">
                    <h1 class="text-2xl font-bold text-center mb-6 text-[#00A3E0]">Add a Ride</h1>
                    
                    <form>
                        <!-- Ride Type Dropdown -->
                        <div class="mb-4">
                            <label for="rideType" class="block text-sm font-medium text-gray-700">Ride Type</label>
                            <select id="rideType" 
                                class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                                <option value="" disabled>Select Ride Type</option>
                                <option value="crystal_kayak">Crystal Kayak</option>
                                <option value="paddle_board">Paddle Board</option>
                                <option value="banana_boat">Banana Boat</option>
                                <option value="jet_ski">Jet Ski</option>
                            </select>
                        </div>

                        <!-- Classification Dropdown -->
                        <div class="mb-4">
                            <label for="classification" class="block text-sm font-medium text-gray-700">Classification</label>
                            <select id="classification" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                                <option value="" disabled>Select Classification</option>
                                <option value="red_rope">Red Rope</option>
                                <option value="rubber_blue">Rubber Blue</option>
                                <option value="standard">Standard</option>
                                <option value="premium">Premium</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="note" class="block text-sm font-medium text-gray-700">Note:</label>
                            <textarea 
                                id="note" 
                                rows="3" 
                                class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50"
                                placeholder="Enter any additional notes here..."
                            ></textarea>
                        </div>

                        <!-- life jacket usage -->
                        <div class="mb-4">
                            <label for="life_jacket_usage" class="block text-sm font-medium text-gray-700">life jacket usage</label>
                            <select id="life_jacket_usage" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <!-- Predefined Duration Dropdown -->
                        <div class="mb-4">
                            <label for="predefinedDuration" class="block text-sm font-medium text-gray-700">Duration</label>
                            <select id="predefinedDuration" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                                <option value="60">1 Hour</option>
                                <option value="30">30 minutes</option>
                                <option value="120">2 Hours</option>
                                <option value="180">3 Hours</option>
                                <option value="240">4 Hours</option>
                                <option value="300">5 Hours</option>
                            </select>
                        </div>

                        <!-- Custom Duration Toggle -->
                        <div class="mb-4 flex items-center">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" id="showCustomDuration" class="sr-only peer">
                                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-sky-300 dark:peer-focus:ring-sky-800 dark:bg-sky-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-sky-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-sky-600 peer-checked:bg-sky-600"></div>
                                <span class="ms-3 text-sm font-medium text-slate-700">Custom Duration</span>
                            </label>
                        </div>

                        <!-- Custom Duration Input -->
                        <div class="mb-4 hidden" id="customDurationContainer">
                            <label for="customDuration" class="block text-sm font-medium text-gray-700">Custom Duration (minutes)</label>
                            <input id="customDuration" type="number" min="1" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                        </div>

                        <!-- Total Price Display -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Price</label>
                            <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">₱800.00</p>
                        </div>

                        <!-- Time Start & End -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Time Started</label>
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">09:00 AM</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Time Ended</label>
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">10:00 AM</p>
                            </div>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="flex space-x-4">
                            <button type="button" 
                                onclick="closeModal('modalAddRide')"
                                class="w-full bg-[#FF8C00] text-white px-5 py-2.5 rounded-lg font-medium
                                       transform transition-all duration-200 hover:-translate-y-1 
                                       hover:shadow-md hover:bg-[#E67E00]">
                                Cancel
                            </button>

                            <button 
                                class="w-full bg-[#00A3E0] text-white py-2.5 px-5 rounded-lg font-medium 
                                       transform transition-all duration-200 hover:-translate-y-1 
                                       hover:shadow-md hover:bg-[#0093CC]">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Ride Modal -->
        <div id="modalEditRide" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="w-full max-w-lg p-6 bg-white rounded-lg relative overflow-hidden border-double border-4 border-[#00A3E0]">
                    <h1 class="text-2xl font-bold text-center mb-6 text-[#00A3E0]">Edit Ride</h1>
                    <form>
                        <!-- Ride Type -->
                        <div class="mb-4">
                            <label for="editRideType" class="block text-sm font-medium text-gray-700">Ride Type</label>
                            <select id="editRideType" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                                <option value="crystal_kayak" selected>Crystal Kayak</option>
                                <option value="paddle_board">Paddle Board</option>
                                <option value="banana_boat">Banana Boat</option>
                                <option value="jet_ski">Jet Ski</option>
                            </select>
                        </div>
                        <!-- Classification -->
                        <div class="mb-4">
                            <label for="editClassification" class="block text-sm font-medium text-gray-700">Classification</label>
                            <select id="editClassification" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                                <option value="red_rope" selected>Red Rope</option>
                                <option value="rubber_blue">Rubber Blue</option>
                                <option value="standard">Standard</option>
                                <option value="premium">Premium</option>
                            </select>
                        </div>
                        <!-- Note -->
                        <div class="mb-4">
                            <label for="editNote" class="block text-sm font-medium text-gray-700">Note:</label>
                            <textarea id="editNote" rows="3" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50" placeholder="Enter any additional notes here...">Morning ride</textarea>
                        </div>
                        <!-- Life Jacket Usage -->
                        <div class="mb-4">
                            <label for="editLifeJacketUsage" class="block text-sm font-medium text-gray-700">Life Jacket Usage</label>
                            <select id="editLifeJacketUsage" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <!-- Extend Ride Section -->
                        <div class="mb-6 text-center">
                            <h1 class="text-2xl font-bold text-[#00A3E0] mb-2">Extend Ride</h1>
                            <p class="text-gray-600 text-sm">Adjust the duration of the current ride</p>
                        </div>
                        <!-- Current Duration Display -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Current Duration</label>
                            <p class="text-lg font-semibold text-gray-800">1hr</p>
                        </div>
                        <!-- Extend Time Section -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">Extend Time</label>
                            <select class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                                <option value="0">No Extension</option>
                                <option value="30">30 minutes</option>
                                <option value="60">1 Hour</option>
                                <option value="120">2 Hours</option>
                                <option value="180">3 Hours</option>
                                <option value="240">4 Hours</option>
                                <option value="300">5 Hours</option>
                            </select>
                            <!-- Custom Duration Toggle -->
                            <div class="mt-4 flex items-center">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" id="editShowCustomDuration" class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-sky-300 dark:peer-focus:ring-sky-800 dark:bg-sky-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-sky-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-sky-600 peer-checked:bg-sky-600"></div>
                                    <span class="ms-3 text-sm font-medium text-slate-700">Custom Extension</span>
                                </label>
                            </div>
                            <!-- Custom Duration Input -->
                            <div class="mt-4 hidden" id="editCustomDurationContainer">
                                <label for="editCustomDuration" class="block text-sm font-medium text-gray-700">Custom Extension (minutes)</label>
                                <input id="editCustomDuration" type="number" min="1" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                            </div>
                        </div>
                        <!-- New Total Duration Display -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">New Total Duration</label>
                            <p class="text-lg font-semibold text-gray-800">1hr</p>
                        </div>
                        <!-- Updated Time End Display -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">New End Time</label>
                            <p class="text-lg font-semibold text-gray-800">10:00 AM</p>
                        </div>
                        <!-- Updated Total Price Display -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">New Total Price</label>
                            <p class="text-lg font-semibold text-gray-800">₱800.00</p>
                        </div>
                        <div class="flex space-x-4">
                            <button type="button" onclick="hideEditRideModal()"
                                class="w-full bg-red-500 text-white px-5 py-2.5 rounded-lg font-medium
                                    transform transition-all duration-200 hover:-translate-y-1 
                                    hover:shadow-md hover:bg-red-600">
                                End Time
                            </button>

                            <button type="button" onclick="hideEditRideModal()"
                                class="w-full bg-[#FF8C00] text-white px-5 py-2.5 rounded-lg font-medium transform transition-all duration-200 hover:-translate-y-1 hover:shadow-md hover:bg-[#E67E00]">
                                Cancel
                            </button>
                            <button class="w-full bg-[#00A3E0] text-white py-2.5 px-5 rounded-lg font-medium transform transition-all duration-200 hover:-translate-y-1 hover:shadow-md hover:bg-[#0093CC]">
                                Save
                            </button>
                        </div>
                    </form>
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
                                <p class="mt-2 text-gray-600">Are you sure you want to delete this ride? This action cannot be undone.</p>
                            </div>
                            <div class="flex space-x-3">
                                <button type="button" onclick="hideDeleteModal()"
                                    class="w-full bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-medium
                                           transform transition-all duration-200 hover:-translate-y-1 
                                           hover:shadow-md hover:bg-gray-300">
                                    Cancel
                                </button>
                                <button type="button" onclick="confirmDelete()"
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

        <!-- Confirmation Modal for Alarm -->
        <div id="modalConfirmAlarm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="w-full max-w-lg p-6 bg-white rounded-lg relative overflow-hidden border-double border-4 border-[#00A3E0]">
                    <!-- Alarm icon -->
                    <div class="flex justify-center mb-6">
                        <div class="rounded-full bg-blue-100 p-3 ring-8 ring-blue-50">
                            <svg class="w-12 h-12 text-blue-500 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-[#00A3E0] mb-2">Ride Time Alert! ⏰</h3>
                        <p id="modalRideDetails" class="text-lg text-gray-600">
                            <!-- Content will be populated by JavaScript -->
                        </p>
                        <p class="mt-4 text-sm text-gray-500">
                            Please confirm to acknowledge this timeout and stop the alarm.
                        </p>
                    </div>

                    <!-- Button -->
                    <div class="flex justify-center">
                        <button onclick="closeModal('modalConfirmAlarm')" 
                                class="bg-[#00A3E0] text-white px-8 py-3 rounded-xl
                                       font-semibold transform transition-all duration-200 
                                       hover:bg-[#0093CC] hover:-translate-y-0.5 
                                       hover:shadow-lg active:translate-y-0 
                                       focus:ring-4 focus:ring-blue-200 focus:outline-none">
                            Confirm & Stop Alarm
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let alarmAudio = null;

    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block'
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none'
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
        if (alarmAudio) {
            alarmAudio.pause();
            alarmAudio.currentTime = 0;
        }
    }

    // Close all modals when press ESC
    document.onkeydown = function(event) {
        event = event || window.event;
        if (event.keyCode === 27) {
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
            let modals = document.getElementsByClassName('modal');
            Array.prototype.slice.call(modals).forEach(i => {
                i.style.display = 'none'
            })
            if (alarmAudio) {
                alarmAudio.pause();
                alarmAudio.currentTime = 0;
            }
        }
    };

    function checkAlarms() {
        const currentTime = new Date();
        const currentTimeString = currentTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

        const timeEnds = document.querySelectorAll('.timeEnd');

        timeEnds.forEach((element) => {
            const timeEnd = element.textContent.trim();
            
            if (timeEnd === currentTimeString) {
                const rideRow = element.closest('tr');
                const rideType = rideRow.querySelector('td:nth-child(2) > div:first-child').textContent.trim();
                const classification = rideRow.querySelector('td:nth-child(3)').textContent.trim();

                const modalDetails = `The <span class="font-bold text-red-500">${rideType}</span> ride with classification <span class="font-bold text-red-500">${classification}</span> has reached its time limit. The ride duration has expired and needs to be ended.`;
                document.getElementById('modalRideDetails').innerHTML = modalDetails;

                playAlarmSound();
                openModal('modalConfirmAlarm');
            }
        });
    }

    function playAlarmSound() {
        if (!alarmAudio) {
            alarmAudio = new Audio('/sound/alarm.mp3');
            alarmAudio.loop = true;
        }
        alarmAudio.play();
    }

    // Start checking alarms when document loads
    document.addEventListener('DOMContentLoaded', function() {
        checkAlarms();
        setInterval(checkAlarms, 60000); // Check every minute
    });

    function updateRemainingTimes() {
        const now = new Date();
        now.setDate(now.getDate());
        
        document.querySelectorAll('.remaining-time').forEach(cell => {
            // Check if marked as done
            const isMarked = cell.dataset.marked === 'true';
            if (isMarked) {
                cell.textContent = 'Ended';
                cell.classList.remove('text-green-600');
                cell.classList.add('text-red-500');
                return;
            }

            // Regular remaining time calculation
            const endTimeStr = cell.dataset.end;
            const endTime = new Date(endTimeStr);
            
            if (endTime > now) {
                const diff = endTime - now;
                const minutes = Math.floor(diff / (1000 * 60));
                const hours = Math.floor(minutes / 60);
                const remainingMinutes = minutes % 60;
                
                let timeText = '';
                if (hours > 0) {
                    timeText += `${hours}h `;
                }
                if (remainingMinutes > 0 || hours === 0) {
                    timeText += `${remainingMinutes}m`;
                }
                
                cell.textContent = timeText.trim();
                cell.classList.remove('text-red-500');
                cell.classList.add('text-green-600');
            } else {
                cell.textContent = 'Ended';
                cell.classList.remove('text-green-600');
                cell.classList.add('text-red-500');
            }
        });
    }

    // Update every second for more accurate countdown
    document.addEventListener('DOMContentLoaded', function() {
        updateRemainingTimes();
        setInterval(updateRemainingTimes, 1000);
    });

    // Show/hide logic for Edit modal
    function showEditRideModal() {
        const editModal = document.getElementById('modalEditRide');
        editModal.style.display = 'block';
    }

    function hideEditRideModal() {
        const editModal = document.getElementById('modalEditRide');
        editModal.style.display = 'none';
    }

    // Custom duration toggle for edit modal
    const editShowCustomDuration = document.getElementById('editShowCustomDuration');
    const editCustomDurationContainer = document.getElementById('editCustomDurationContainer');
    if (editShowCustomDuration && editCustomDurationContainer) {
        editShowCustomDuration.addEventListener('change', function() {
            if (this.checked) {
                editCustomDurationContainer.classList.remove('hidden');
            } else {
                editCustomDurationContainer.classList.add('hidden');
            }
        });
    }

    // Delete modal functions
    function showDeleteModal() {
        const deleteModal = document.getElementById('deleteModal');
        if (deleteModal) {
            deleteModal.classList.remove('hidden');
            deleteModal.classList.add('flex');
        }
    }

    function hideDeleteModal() {
        const deleteModal = document.getElementById('deleteModal');
        if (deleteModal) {
            deleteModal.classList.remove('flex');
            deleteModal.classList.add('hidden');
        }
    }

    function confirmDelete() {
        // Here you would typically handle the delete action
        hideDeleteModal();
    }

    // Close modals when clicking outside
    document.addEventListener('DOMContentLoaded', function() {
        // Delete modal functionality
        const deleteModal = document.getElementById('deleteModal');
        if (deleteModal) {
            deleteModal.addEventListener('click', function(e) {
                if (e.target === this) {
                    hideDeleteModal();
                }
            });
        }
    });
</script>


