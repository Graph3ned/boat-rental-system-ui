<div class="min-h-full p-4">
  <div class="w-full rounded-lg relative overflow-hidden">
    <!-- Decorative wave elements -->
    <div class="absolute top-0 left-0 right-0 h-1"></div>

    <div class="w-full">
    <div class="flex flex-col lg:flex-row lg:space-x-4 space-y-4 lg:space-y-0">
      <!-- Sidebar Section -->
      <div class="w-full lg:w-1/4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mt-4 ml-4 border border-gray-100 transition-all duration-300 hover:shadow-xl">
          <!-- Card Header -->
          <div class="bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-4">
            <div class="flex justify-between items-center">
              <h3 class="text-white text-lg font-semibold tracking-wide">Filter Options</h3>
                <button class="inline-flex items-center px-4 py-1.5 bg-white/20 hover:bg-white/30 active:bg-white/40 rounded-lg 
                             transition-all duration-200 text-white text-sm font-medium backdrop-blur-sm group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 group-hover:-rotate-45 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                Reset
              </button>
            </div>
          </div>

          <!-- Card Body -->
          <div class="p-6 space-y-6">
            <!-- Staff Select -->
            <div class="space-y-2">
              <label class="flex items-center text-gray-700 font-medium text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Staff
              </label>
                <select class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                             focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                <option value="">All Staff</option>
                  <option value="Edbert">Edbert</option>
                  <option value="Rodrigo">Rodrigo</option>
                  <option value="June Rhyll">June Rhyll</option>
              </select>
            </div>

            <!-- Ride Type & Classification Group -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Ride Type Select -->
              <div class="space-y-2">
                <label class="flex items-center text-gray-700 font-medium text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                  </svg>
                  Ride Type
                </label>
                  <select class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                               focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                  <option value="">All Types</option>
                    <option value="Crystal Kayak">Crystal Kayak</option>
                    <option value="Paddle Board">Paddle Board</option>
                    <option value="Water Bike">Water Bike</option>
                </select>
              </div>

              <!-- Classification Select -->
              <div class="space-y-2">
                <label class="flex items-center text-gray-700 font-medium text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                  </svg>
                  Classification
                </label>
                  <select class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                               focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                  <option value="">All Classifications</option>
                    <option value="Orange Rope">Orange Rope</option>
                    <option value="Red Rope">Red Rope</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Yellow">Yellow</option>
                </select>
              </div>
            </div>

            <!-- Date Range Section -->
            <div class="space-y-2">
              <label class="flex items-center text-gray-700 font-medium text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Date Range
              </label>
                <select class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                             focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                <option value="">All Time</option>
                <option value="today">Today</option>
                <option value="this_month" selected>Current Month</option>
                <option value="custom">Custom Date Range</option>
              </select>
                    </div>
                </div>
        </div>
      </div>

      <!-- Main Content Section -->
      <div class="w-full lg:w-3/4 p-0 sm:p-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
          <!-- Card Header with gradient background -->
          <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
              <!-- Sales Info -->
              <div class="space-y-1">
                <p class="text-white/80 text-sm font-medium">Total Sales</p>
                  <h5 class="text-3xl font-bold text-white">₱12,600.00</h5>
              </div>
            </div>
          </div>

          <!-- Chart Container -->
          <div class="p-6">
            <div class="h-[300px]">
              <canvas id="salesChart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- Table Section -->
    <div class="w-full p-0 sm:p-4 mt-6">
      <div class="flex justify-between items-center mb-4">
        <div class="flex items-center space-x-2">
          <label class="flex items-center text-gray-700 font-medium text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
            Show
          </label>
            <select class="text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                         focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="50">50</option>
          </select>
          <span class="text-sm text-gray-600">entries</span>
        </div>
      </div>

      <div class="overflow-x-auto rounded-lg shadow-lg border border-blue-100">
        <div class="max-h-[600px] overflow-y-auto">
          <table class="w-full min-w-max table-auto text-sm">
            <thead class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white text-sm font-semibold sticky top-0 z-10">
              <tr class="border-b border-blue-400">
                <th class="px-4 py-3 text-left">No.</th>
                <th class="px-4 py-3 text-left">Staff</th>
                <th class="px-4 py-3 text-left">Type</th>
                <th class="px-4 py-3 text-left hidden lg:table-cell">Class</th>
                <th class="px-4 py-3 text-left hidden sm:table-cell">Duration</th>
                <th class="px-4 py-3 text-left hidden md:table-cell">Jackets</th>
                <th class="px-4 py-3 text-left">Total</th>
                <th class="px-4 py-3 text-left hidden md:table-cell">Start</th>
                <th class="px-4 py-3 text-left hidden md:table-cell">End</th>
                <th class="px-4 py-3 text-left hidden lg:table-cell">Date</th>
                <th class="px-4 py-3 text-left hidden lg:table-cell">Note</th>
                <th class="px-4 py-3 text-center">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-blue-100">
                <!-- Sample Row 1 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">1</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">Edbert</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Crystal Kayak</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Orange Rope</span>
                      </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">1hr</span>
                        </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                        </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">2</span>
                        </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">09:00 AM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">10:00 AM</span>
                          </div>
                        </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Morning ride</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Orange Rope</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">2</td>
                  <td class="px-4 py-3 text-gray-700">₱300.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">09:00 AM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">10:00 AM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Morning ride</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 2 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">2</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">Rodrigo</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Paddle Board</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                        <div class="text-xs min-w-[150px]">
                            <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Red</span>
                        </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">1hr</span>
                        </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                        </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">1</span>
                        </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">10:00 AM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">11:00 AM</span>
                          </div>
                        </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Solo ride</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Red</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">1</td>
                  <td class="px-4 py-3 text-gray-700">₱200.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">10:00 AM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">11:00 AM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Solo ride</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 3 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">3</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">June Rhyll</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Water Bike</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Yellow</span>
                      </div>
                        <div class="space-y-1.5">
                            <div class="sm:hidden text-xs min-w-[150px]">
                                <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">1hr</span>
                            </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                        </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">1</span>
                        </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">11:00 AM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">12:00 PM</span>
                          </div>
                        </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Morning ride</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Yellow</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">1</td>
                  <td class="px-4 py-3 text-gray-700">₱200.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">11:00 AM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">12:00 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Morning ride</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 4 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">4</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">June Rhyll</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Crystal Kayak</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Red Rope</span>
                      </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">1hr</span>
                        </div>
                            <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                                <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                            </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">1</span>
                        </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">11:00 AM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">12:00 PM</span>
                          </div>
                        </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Morning ride</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Red Rope</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">1</td>
                  <td class="px-4 py-3 text-gray-700">₱200.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">11:00 AM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">12:00 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Morning ride</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 5 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">5</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">Edbert</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Paddle Board</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Blue</span>
                      </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">45min</span>
                        </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                        </div>
                            <div class="md:hidden text-xs min-w-[150px]">
                                <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">4</span>
                            </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">03:15 PM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">04:00 PM</span>
                          </div>
                        </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Family ride</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Blue</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">45min</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">4</td>
                  <td class="px-4 py-3 text-gray-700">₱2,000.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">03:15 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">04:00 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Family ride</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 6 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">6</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">Rodrigo</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Water Bike</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Blue</span>
                      </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">1hr</span>
                        </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                        </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">2</span>
                        </div>
                            <div class="md:hidden text-xs space-y-1">
                                <div class="flex flex-col min-w-[150px]">
                                    <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">04:30 PM</span>
                                </div>
                                <div class="flex flex-col min-w-[150px]">
                                    <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">05:30 PM</span>
                                </div>
                            </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Sunset ride</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Blue</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">2</td>
                  <td class="px-4 py-3 text-gray-700">₱3,500.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">04:30 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">05:30 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Sunset ride</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 7 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">7</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">June Rhyll</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Crystal Kayak</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Orange Rope</span>
                      </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">1hr</span>
                        </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                        </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">2</span>
                        </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">05:45 PM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">06:45 PM</span>
                          </div>
                        </div>
                            <div class="lg:hidden text-xs min-w-[150px]">
                                <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">VIP package</span>
                            </div>
                        </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Orange Rope</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">2</td>
                  <td class="px-4 py-3 text-gray-700">₱5,000.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">05:45 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">06:45 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">VIP package</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 8 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">8</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">Edbert</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Paddle Board</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Yellow</span>
                      </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">30min</span>
                        </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                        </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">1</span>
                        </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">11:00 AM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">11:30 AM</span>
                          </div>
                        </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Morning ride</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Yellow</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">30min</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">1</td>
                  <td class="px-4 py-3 text-gray-700">₱2,000.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">11:00 AM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">11:30 AM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Morning ride</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 9 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">9</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">Rodrigo</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Water Bike</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Yellow</span>
        </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">45min</span>
      </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
                        </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">4</span>
                        </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">07:00 PM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">07:45 PM</span>
                          </div>
                        </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Large group</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Yellow</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">45min</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">8</td>
                  <td class="px-4 py-3 text-gray-700">₱4,000.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">07:00 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">07:45 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Large group</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

                <!-- Sample Row 10 -->
                <tr class="bg-white hover:bg-blue-50 transition-colors duration-200">
                  <td class="px-4 py-3 text-gray-700">10</td>
                  <td class="px-4 py-3">
                    <div class="text-gray-700">June Rhyll</div>
                  </td>
                  <td class="px-4 py-3 lg:w-[150px] lg:min-w-[150px]">
                    <div class="text-gray-700 font-medium">Crystal Kayak</div>
                    <div class="lg:hidden space-y-1.5 mt-2">
                      <div class="text-xs min-w-[150px]">
                        <span class="text-blue-600 font-medium">Class:</span>
                        <span class="text-gray-600">Red Rope</span>
                    </div>
                      <div class="space-y-1.5">
                        <div class="sm:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Duration:</span>
                          <span class="text-gray-600">1hr 30min</span>
                </div>
                        <div class="lg:hidden portrait:block landscape:hidden text-xs min-w-[150px]">
                          <span class="text-rose-600 font-medium">Date:</span>
                          <span class="text-gray-600">Mar 15, 2024</span>
            </div>
                        <div class="md:hidden text-xs min-w-[150px]">
                          <span class="text-emerald-600 font-medium">Jackets:</span>
                          <span class="text-gray-600">3</span>
                        </div>
                        <div class="md:hidden text-xs space-y-1">
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">Start:</span>
                            <span class="text-gray-600 ml-4">08:00 PM</span>
                          </div>
                          <div class="flex flex-col min-w-[150px]">
                            <span class="text-indigo-600 font-medium">End:</span>
                            <span class="text-gray-600 ml-4">09:30 PM</span>
                          </div>
                        </div>
                        <div class="lg:hidden text-xs min-w-[150px]">
                          <span class="text-purple-600 font-medium">Note:</span>
                          <span class="text-gray-600">Night flight</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Red Rope</td>
                  <td class="px-4 py-3 text-gray-700 hidden sm:table-cell">1hr 30min</td>
                  <td class="px-4 py-3 text-gray-700 text-center hidden md:table-cell">3</td>
                  <td class="px-4 py-3 text-gray-700">₱6,000.00</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">08:00 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden md:table-cell">09:30 PM</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Mar 15, 2024</td>
                  <td class="px-4 py-3 text-gray-700 hidden lg:table-cell">Night flight</td>
                  <td class="px-4 py-3 text-center">
                    <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2">
                      <button onclick="showEditForm()"
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

      <!-- Pagination -->
        <div class="mt-6 flex justify-between items-center">
          <div class="text-sm text-gray-600">
            Showing 1 to 10 of 10 entries
        </div>
          <div class="flex space-x-2">
            <button class="px-3 py-1 rounded-lg bg-white border border-gray-200 hover:bg-gray-50">Previous</button>
            <button class="px-3 py-1 rounded-lg bg-white border border-gray-200 hover:bg-gray-50">Next</button>
    </div>
  </div>
</div>
    </div>
  </div>

  <!-- --------------------- edit ride --------------------- -->
  <div id="editFormOverlay" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="flex justify-center items-center w-full h-full">
      <div class="w-full max-w-xl">
        <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg shadow-lg">
          <div class="p-4">
            <div class="mb-6">
              <h1 class="text-2xl font-bold text-[#00A3E0] text-center px-4 py-3">Edit Ride</h1>
            </div>

            <form>
                {{-- Text input: Staff name/ID --}}
                <div class="mb-3">
                    <label for="user" class="block text-sm font-medium text-gray-700">Staff</label>
                    <input type="text" 
                            id="user" 
                            value="Edbert"
                            class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                                    focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                </div>

                {{-- Select: Ride type --}}
                <div class="mb-3">
                    <label for="rideType" class="block text-sm font-medium text-gray-700">Ride Type</label>
                    <select id="rideType" 
                        class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                        <option value="Crystal Kayak" selected>Crystal Kayak</option>
                        <option value="Paddle Board">Paddle Board</option>
                        <option value="Water Bike">Water Bike</option>
                    </select>
                </div>

                {{-- Select: Classification --}}
                <div class="mb-3">
                    <label for="classification" class="block text-sm font-medium text-gray-700">Classification</label>
                    <select id="classification" 
                        class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                        <option value="Orange Rope" selected>Orange Rope</option>
                        <option value="Red Rope">Red Rope</option>
                    </select>
                </div>

                {{-- Duration --}}
                <div class="mb-3">
                    <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
                    <select id="duration" 
                        class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                        <option value="30min">30 minutes</option>
                        <option value="45min">45 minutes</option>
                        <option value="1hr" selected>1 hour</option>
                        <option value="1hr 15min">1 hour 15 minutes</option>
                        <option value="1hr 30min">1 hour 30 minutes</option>
                    </select>
                </div>

                {{-- Select: Life jacket usage --}}
                <div class="mb-3">
                    <label for="life_jacket_usage" class="block text-sm font-medium text-gray-700">Life Jacket Usage</label>
                    <select id="life_jacket_usage" 
                        class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>

                {{-- Number input: Total price --}}
                <div class="mb-3">
                    <label for="totalPrice" class="block text-sm font-medium text-gray-700">Total Price</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">₱</span>
                        <input type="number" 
                               id="totalPrice" 
                               value="300"
                               class="pl-8 block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                                      focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50"
                               min="0">
                    </div>
                </div>

                {{-- Date --}}
                <div class="mb-3">
                    <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="date" 
                           id="date" 
                           value="2024-03-15"
                           class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                                  focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                </div>

                {{-- Time Range --}}
                <div class="grid grid-cols-2 gap-6 mb-3">
                    <div>
                        <label for="startTime" class="block text-sm font-medium text-gray-700">Start Time</label>
                        <input type="time" 
                               id="startTime" 
                               value="09:00"
                               class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                                      focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                    </div>
                    <div>
                        <label for="endTime" class="block text-sm font-medium text-gray-700">End Time</label>
                        <input type="time" 
                               id="endTime" 
                               value="10:00"
                               class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                                      focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                    </div>
                </div>

                {{-- Note textarea input --}}
                <div class="mb-3">
                    <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                    <textarea
                        id="note"
                        class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm 
                               focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50"
                        rows="2"
                    >Morning ride</textarea>
                </div>

                <div class="flex space-x-3">
                    <button type="button" onclick="hideEditForm()"
                        class="w-full bg-[#FF8C00] text-white px-4 py-2 rounded-lg font-medium
                               transform transition-all duration-200 hover:-translate-y-1 
                               hover:shadow-md hover:bg-[#E67E00]">
                        Cancel
                    </button>

                    <button type="submit"
                        class="w-full bg-[#00A3E0] text-white py-2 px-4 rounded-lg font-medium 
                               transform transition-all duration-200 hover:-translate-y-1 
                               hover:shadow-md hover:bg-[#0093CC]">
                        Save
                    </button>
                </div>
            </form>
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

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('salesChart');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mar 10', 'Mar 11', 'Mar 12', 'Mar 13', 'Mar 14', 'Mar 15', 'Mar 16'],
            datasets: [{
                label: 'Daily Sales',
                data: [1800, 2100, 1750, 1900, 1650, 1260, 2140],
                borderWidth: 3,
                borderColor: '#1A56DB',
                backgroundColor: (context) => {
                    const chart = context.chart;
                    const { ctx, chartArea } = chart;
                    if (!chartArea) return null;
                    
                    const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
                    gradient.addColorStop(0, 'rgba(26, 86, 219, 0.4)');
                    gradient.addColorStop(1, 'rgba(26, 86, 219, 0)');
                    return gradient;
                },
                fill: true,
                tension: 0.4,
                pointRadius: 0,
                pointHoverRadius: 6,
                pointHoverBackgroundColor: '#ffffff',
                pointHoverBorderColor: '#1A56DB',
                pointHoverBorderWidth: 3,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                intersect: false,
                mode: 'index',
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(255, 255, 255, 0.95)',
                    titleColor: '#1f2937',
                    bodyColor: '#1f2937',
                    bodyFont: {
                        size: 13,
                        family: 'Inter, sans-serif',
                    },
                    titleFont: {
                        size: 13,
                        family: 'Inter, sans-serif',
                        weight: '600',
                    },
                    padding: 12,
                    boxPadding: 6,
                    borderColor: 'rgba(0, 0, 0, 0.1)',
                    borderWidth: 1,
                    callbacks: {
                        label: function(context) {
                            return '₱' + context.parsed.y.toLocaleString('en-US', {
                                minimumFractionDigits: 2,
                                maximumFractionDigits: 2
                            });
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false,
                        color: 'rgba(0, 0, 0, 0.05)',
                        drawTicks: false,
                    },
                    ticks: {
                        callback: function(value) {
                            return '₱' + value.toLocaleString('en-US');
                        },
                        font: {
                            family: "Inter, sans-serif",
                            size: 11,
                            weight: '500'
                        },
                        color: '#6B7280',
                        padding: 10
                    },
                    border: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            family: "Inter, sans-serif",
                            size: 11,
                            weight: '500'
                        },
                        color: '#6B7280',
                        maxRotation: 0,
                        padding: 10
                    },
                    border: {
                        display: false
                    }
                }
            },
            hover: {
                mode: 'index',
                intersect: false
            },
            elements: {
                line: {
                    borderJoinStyle: 'round'
                }
            }
        },
        plugins: [{
            id: 'hoverLine',
            beforeDraw: function(chart) {
                if (chart.tooltip._active && chart.tooltip._active.length) {
                    const activePoint = chart.tooltip._active[0];
                    const { ctx } = chart;
                    const { x } = activePoint.element;
                    const topY = chart.scales.y.top;
                    const bottomY = chart.scales.y.bottom;

                    ctx.save();
                    ctx.beginPath();
                    ctx.moveTo(x, topY);
                    ctx.lineTo(x, bottomY);
                    ctx.lineWidth = 1;
                    ctx.strokeStyle = 'rgba(0, 0, 0, 0.1)';
                    ctx.stroke();
                    ctx.restore();
                }
            }
        }]
    });

    // Edit modal functionality
    const editFormOverlay = document.getElementById('editFormOverlay');
    
    // Add click event only to the first edit button
    const firstEditButton = document.querySelector('tr:first-child button.bg-blue-600');
    if (firstEditButton) {
        firstEditButton.addEventListener('click', function(e) {
            e.preventDefault();
            showEditForm();
        });
    }

    // Close form when clicking outside
    editFormOverlay.addEventListener('click', function(e) {
        if (e.target === this) {
            hideEditForm();
        }
    });

    // Form submission handler
    const editForm = editFormOverlay.querySelector('form');
    editForm.addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically handle the form submission
        // For now, we'll just hide the form
        hideEditForm();
    });
});

// Modal Functions
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

function showEditForm() {
    const editFormOverlay = document.getElementById('editFormOverlay');
    if (editFormOverlay) {
        editFormOverlay.classList.remove('hidden');
        editFormOverlay.classList.add('flex');
    }
}

function hideEditForm() {
    const editFormOverlay = document.getElementById('editFormOverlay');
    if (editFormOverlay) {
        editFormOverlay.classList.remove('flex');
        editFormOverlay.classList.add('hidden');
    }
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

    // Edit form functionality
    const editFormOverlay = document.getElementById('editFormOverlay');
    if (editFormOverlay) {
        editFormOverlay.addEventListener('click', function(e) {
            if (e.target === this) {
                hideEditForm();
            }
        });
    }

    // Form submission handler
    const editForm = editFormOverlay?.querySelector('form');
    if (editForm) {
        editForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would typically handle the form submission
            hideEditForm();
        });
    }
});

function confirmDelete() {
    // Here you would typically handle the delete action
    hideDeleteModal();
}
</script>