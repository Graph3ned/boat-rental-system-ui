<div class="min-h-full p-4">
  <div class="w-full rounded-lg relative overflow-hidden">
    <!-- Header Card -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl mb-6">
      <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
        <div class="flex justify-between items-center">
          <h2 class="text-2xl font-bold text-white">Prices</h2>
          <button onclick="showAddRideForm()"
                  class="inline-flex items-center px-6 py-2.5 bg-white/20 hover:bg-white/30 active:bg-white/40 
                         rounded-lg transition-all duration-200 text-white text-sm font-medium backdrop-blur-sm group">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
              Add New Ride
          </button>
        </div>

        <div class="min-h-full">
          <div class="w-full rounded-lg relative overflow-hidden">
            
            <!-- Main Form Card -->
            <div id="addRideForm" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
              <div class="flex justify-center items-center w-full h-full">
                <div class="w-full max-w-2xl mx-4">
                  <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                    <!-- Header -->
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
                      <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-bold text-white">Create Ride Pricing</h2>
                        <button onclick="hideAddRideForm()" class="text-white hover:text-gray-200">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>
                    </div>

                    <!-- Form Content -->
                    <div class="p-6">
                      <form class="space-y-6">
                        <!-- Ride Type Input -->
                        <div class="space-y-2">
                          <label for="ride_type" class="flex items-center text-gray-700 font-medium text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            Ride Type
                          </label>
                          <input id="ride_type" 
                              type="text" 
                              placeholder="Enter ride type"
                              class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                                     focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                        </div>

                        <!-- Classification Input -->
                        <div class="space-y-2">
                          <label for="classification" class="flex items-center text-gray-700 font-medium text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            Classification
                          </label>
                          <input id="classification" 
                              type="text" 
                              placeholder="Enter classification"
                              class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                                     focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                        </div>

                        <!-- Price Per Hour Input -->
                        <div class="space-y-2">
                          <label for="price_per_hour" class="flex items-center text-gray-700 font-medium text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Price Per Hour
                          </label>
                          <input id="price_per_hour" 
                              type="number" 
                              placeholder="Enter price per hour"
                              class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                                     focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-4 pt-4">
                          <button type="button" onclick="hideAddRideForm()"
                              class="w-full inline-flex justify-center items-center px-6 py-2.5 border border-transparent
                                     text-white bg-gray-600 hover:bg-gray-700 focus:ring-gray-500
                                     rounded-lg transition-all duration-200 font-medium text-sm
                                     focus:outline-none focus:ring-2 focus:ring-offset-2">
                            Cancel
                          </button>

                          <button type="submit"
                              class="w-full inline-flex justify-center items-center px-6 py-2.5
                                     bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                                     text-white rounded-lg transition-all duration-200 font-medium text-sm
                                     focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                                     shadow-md hover:shadow-lg">
                            Save
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

      <!-- Price Cards Grid -->
      <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Crystal Kayak Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 
                        transition-all duration-300 hover:-translate-y-1 hover:shadow-xl group">
              <div class="p-6">
                <div class="flex justify-between items-center">
                  <h3 class="text-lg font-semibold text-gray-800">Crystal Kayak</h3>
                  <button onclick="showDetailsModal('Crystal Kayak')"
                          class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-600 
                                 hover:from-cyan-600 hover:to-blue-700 rounded-lg transition-all duration-200 
                                 text-white text-sm font-medium shadow-md hover:shadow-lg">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <!-- Paddle Board Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 
                        transition-all duration-300 hover:-translate-y-1 hover:shadow-xl group">
              <div class="p-6">
                <div class="flex justify-between items-center">
                  <h3 class="text-lg font-semibold text-gray-800">Paddle Board</h3>
                  <button onclick="showDetailsModal('Paddle Board')"
                          class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-600 
                                 hover:from-cyan-600 hover:to-blue-700 rounded-lg transition-all duration-200 
                                 text-white text-sm font-medium shadow-md hover:shadow-lg">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <!-- Water Bike Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 
                        transition-all duration-300 hover:-translate-y-1 hover:shadow-xl group">
              <div class="p-6">
                <div class="flex justify-between items-center">
                  <h3 class="text-lg font-semibold text-gray-800">Water Bike</h3>
                  <button onclick="showDetailsModal('Water Bike')"
                          class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-600 
                                 hover:from-cyan-600 hover:to-blue-700 rounded-lg transition-all duration-200 
                                 text-white text-sm font-medium shadow-md hover:shadow-lg">
                    <span>View Details</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Details Modal -->
  <div id="detailsModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="flex justify-center items-center w-full h-full">
      <div class="w-full max-w-2xl mx-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
          <!-- Header -->
          <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
            <div class="flex justify-between items-center">
              <h2 class="text-2xl font-bold text-white" id="modalTitle">Ride Details</h2>
              <button onclick="hideDetailsModal()" class="text-white hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>

          <!-- Content -->
          <div class="p-6">
            <!-- Action Buttons -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
              <button class="inline-flex justify-center items-center px-6 py-2.5
                           bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                           text-white rounded-lg transition-all duration-200 font-medium text-sm
                           shadow-md hover:shadow-lg transform hover:-translate-y-0.5"
                           onclick="showAddClassificationForm()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Classification
              </button>

              <button class="inline-flex justify-center items-center px-6 py-2.5
                           bg-red-500 hover:bg-red-600 text-white rounded-lg 
                           transition-all duration-200 font-medium text-sm
                           shadow-md hover:shadow-lg transform hover:-translate-y-0.5"
                           onclick="showDeleteModal()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                Delete
              </button>

              <button onclick="showEditRideForm()"
                      class="inline-flex justify-center items-center px-6 py-2.5
                             bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                             text-white rounded-lg transition-all duration-200 font-medium text-sm
                             shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Edit
              </button>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto shadow-md rounded-lg border border-gray-200">
              <table class="w-full">
                <thead class="bg-gray-50">
                  <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Classification</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Price Per Hour</th>
                    <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Actions</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr class="hover:bg-gray-50/50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Orange Rope</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₱300.00</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <div class="flex justify-end space-x-2">
                        <button class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 
                                     text-white rounded-lg transition-all duration-200 text-sm
                                     shadow hover:shadow-md transform hover:-translate-y-0.5"
                                     onclick="showDeleteClassificationModal('Orange Rope')">
                          Delete
                        </button>
                        <button class="inline-flex items-center px-3 py-1.5
                                     bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                                     text-white rounded-lg transition-all duration-200 text-sm
                                     shadow hover:shadow-md transform hover:-translate-y-0.5"
                                     onclick="showEditClassificationModal('Orange Rope')">
                          Edit
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="hover:bg-gray-50/50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Red Rope</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₱300.00</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <div class="flex justify-end space-x-2">
                        <button class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 
                                     text-white rounded-lg transition-all duration-200 text-sm
                                     shadow hover:shadow-md transform hover:-translate-y-0.5"
                                     onclick="showDeleteClassificationModal('Red Rope')">
                          Delete
                        </button>
                        <button class="inline-flex items-center px-3 py-1.5
                                     bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                                     text-white rounded-lg transition-all duration-200 text-sm
                                     shadow hover:shadow-md transform hover:-translate-y-0.5"
                                     onclick="showEditClassificationModal('Red Rope')">
                          Edit
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Back Button -->
            <div class="mt-6 flex justify-end">
              <button onclick="hideDetailsModal()"
                      class="inline-flex items-center px-6 py-2.5
                             bg-gray-600 hover:bg-gray-700 text-white rounded-lg 
                             transition-all duration-200 font-medium text-sm
                             shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ride Type Delete Confirmation Modal -->
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

  <!-- Delete Classification Confirmation Modal -->
  <div id="deleteClassificationModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="flex justify-center items-center w-full h-full">
      <div class="w-full max-w-md">
        <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg shadow-lg">
          <div class="p-6">
            <div class="mb-4">
              <h3 class="text-xl font-bold text-gray-900">Confirm Delete</h3>
              <p class="mt-2 text-gray-600">Are you sure you want to delete this classification? This action cannot be undone.</p>
            </div>
            <div class="flex space-x-3">
              <button id="cancelDeleteClassification" type="button" onclick="hideDeleteClassificationModal()"
                class="w-full bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-medium
                       transform transition-all duration-200 hover:-translate-y-1 
                       hover:shadow-md hover:bg-gray-300">
                Cancel
              </button>
              <button id="confirmDeleteClassification" type="button" onclick="hideDeleteClassificationModal()"
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

  <!-- Edit Classification Modal -->
  <div id="editClassificationModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="flex justify-center items-center w-full h-full">
      <div class="w-full max-w-2xl mx-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
          <!-- Header -->
          <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
            <div class="flex justify-between items-center">
              <h2 class="text-2xl font-bold text-white">Edit Classification</h2>
              <button onclick="hideEditClassificationModal()" class="text-white hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>

          <!-- Form Content -->
          <div class="p-6">
            <form class="space-y-6">
              <!-- Classification Input -->
              <div class="space-y-2">
                <label class="flex items-center text-gray-700 font-medium text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                  </svg>
                  Classification
                </label>
                <input type="text" 
                       id="editClassification"
                       placeholder="Enter classification"
                       class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                              focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
              </div>

              <!-- Price Input -->
              <div class="space-y-2">
                <label class="flex items-center text-gray-700 font-medium text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  Price Per Hour
                </label>
                <input type="number" 
                       id="editPrice"
                       placeholder="Enter price per hour"
                       class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                              focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
              </div>

              <!-- Action Buttons -->
              <div class="flex space-x-4 pt-4">
                <button type="button" 
                        onclick="hideEditClassificationModal()"
                        class="w-full inline-flex justify-center items-center px-6 py-2.5 border border-transparent
                               text-white bg-gray-600 hover:bg-gray-700 focus:ring-gray-500
                               rounded-lg transition-all duration-200 font-medium text-sm
                               focus:outline-none focus:ring-2 focus:ring-offset-2
                               shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                  Cancel
                </button>

                <button type="submit"
                        class="w-full inline-flex justify-center items-center px-6 py-2.5
                               bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                               text-white rounded-lg transition-all duration-200 font-medium text-sm
                               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                               shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                  Save
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Classification Modal -->
  <div id="addClassificationForm" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="flex justify-center items-center w-full h-full">
        <div class="w-full max-w-2xl mx-4">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                <!-- Header -->
                <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-bold text-white">Add Classification</h2>
                        <button onclick="hideAddClassificationForm()" class="text-white hover:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="p-6">
                    <form class="space-y-6">
                        <!-- Ride Type Input -->
                        <div class="space-y-2">
                            <label class="flex items-center text-gray-700 font-medium text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                Ride Type
                            </label>
                            <input type="text" 
                                   value="Crystal Kayak"
                                   readonly 
                                   class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                        </div>

                        <!-- Classification Input -->
                        <div class="space-y-2">
                            <label class="flex items-center text-gray-700 font-medium text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                                Classification
                            </label>
                            <input type="text" 
                                   placeholder="Enter classification"
                                   class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                        </div>

                        <!-- Price Input -->
                        <div class="space-y-2">
                            <label class="flex items-center text-gray-700 font-medium text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Price Per Hour
                            </label>
                            <input type="number" 
                                   placeholder="Enter price per hour"
                                   class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-4 pt-4">
                            <button type="button" 
                                    onclick="hideAddClassificationForm()"
                                    class="w-full inline-flex justify-center items-center px-6 py-2.5 border border-transparent
                                           text-white bg-gray-600 hover:bg-gray-700 focus:ring-gray-500
                                           rounded-lg transition-all duration-200 font-medium text-sm
                                           focus:outline-none focus:ring-2 focus:ring-offset-2">
                                Cancel
                            </button>

                            <button type="submit"
                                    class="w-full inline-flex justify-center items-center px-6 py-2.5
                                           bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                                           text-white rounded-lg transition-all duration-200 font-medium text-sm
                                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                                           shadow-md hover:shadow-lg">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Ride Modal -->
<div id="editRideForm" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
    <div class="flex justify-center items-center w-full h-full">
        <div class="w-full max-w-2xl mx-4">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl">
                <!-- Header -->
                <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-bold text-white">Edit Ride</h2>
                        <button onclick="hideEditRideForm()" class="text-white hover:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="p-6">
                    <form class="space-y-6">
                        <!-- Ride Type Input -->
                        <div class="space-y-2">
                            <label class="flex items-center text-gray-700 font-medium text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                Ride Type
                            </label>
                            <input type="text" 
                                   value="Crystal Kayak"
                                   class="w-full text-sm rounded-lg border-gray-200 bg-gray-50 focus:bg-white hover:bg-gray-50/80
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-200">
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-4 pt-4">
                            <button type="button" 
                                    onclick="hideEditRideForm()"
                                    class="w-full inline-flex justify-center items-center px-6 py-2.5 border border-transparent
                                           text-white bg-gray-600 hover:bg-gray-700 focus:ring-gray-500
                                           rounded-lg transition-all duration-200 font-medium text-sm
                                           focus:outline-none focus:ring-2 focus:ring-offset-2">
                                Cancel
                            </button>

                            <button type="submit"
                                    class="w-full inline-flex justify-center items-center px-6 py-2.5
                                           bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                                           text-white rounded-lg transition-all duration-200 font-medium text-sm
                                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                                           shadow-md hover:shadow-lg">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function showAddRideForm() {
    document.getElementById('addRideForm').classList.remove('hidden');
    document.getElementById('addRideForm').classList.add('flex');
}

function hideAddRideForm() {
    document.getElementById('addRideForm').classList.remove('flex');
    document.getElementById('addRideForm').classList.add('hidden');
}

function showDetailsModal(rideType) {
    if (rideType === 'Crystal Kayak') {
        document.getElementById('modalTitle').textContent = rideType;
        document.getElementById('detailsModal').classList.remove('hidden');
        document.getElementById('detailsModal').classList.add('flex');
    }
}

function hideDetailsModal() {
    document.getElementById('detailsModal').classList.remove('flex');
    document.getElementById('detailsModal').classList.add('hidden');
}

function showAddClassificationForm() {
    document.getElementById('addClassificationForm').classList.remove('hidden');
    document.getElementById('addClassificationForm').classList.add('flex');
}

function hideAddClassificationForm() {
    document.getElementById('addClassificationForm').classList.remove('flex');
    document.getElementById('addClassificationForm').classList.add('hidden');
}

function showDeleteModal() {
    document.getElementById('deleteModal').classList.remove('hidden');
    document.getElementById('deleteModal').classList.add('flex');
}

function hideDeleteModal() {
    document.getElementById('deleteModal').classList.remove('flex');
    document.getElementById('deleteModal').classList.add('hidden');
}

function showDeleteClassificationModal(classification) {
    document.getElementById('deleteClassificationModal').classList.remove('hidden');
    document.getElementById('deleteClassificationModal').classList.add('flex');
}

function hideDeleteClassificationModal() {
    document.getElementById('deleteClassificationModal').classList.remove('flex');
    document.getElementById('deleteClassificationModal').classList.add('hidden');
}

function showEditClassificationModal(classification) {
    if (classification === 'Orange Rope') {
        document.getElementById('editClassificationModal').classList.remove('hidden');
        document.getElementById('editClassificationModal').classList.add('flex');
        document.getElementById('editClassification').value = classification;
        document.getElementById('editPrice').value = '300';
    }
}

function hideEditClassificationModal() {
    document.getElementById('editClassificationModal').classList.remove('flex');
    document.getElementById('editClassificationModal').classList.add('hidden');
}

function showEditRideForm() {
    document.getElementById('editRideForm').classList.remove('hidden');
    document.getElementById('editRideForm').classList.add('flex');
}

function hideEditRideForm() {
    document.getElementById('editRideForm').classList.remove('flex');
    document.getElementById('editRideForm').classList.add('hidden');
}

// Close modals when clicking outside
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('addRideForm').addEventListener('click', function(e) {
        if (e.target === this) {
            hideAddRideForm();
        }
    });

    document.getElementById('detailsModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideDetailsModal();
        }
    });

    document.getElementById('addClassificationForm').addEventListener('click', function(e) {
        if (e.target === this) {
            hideAddClassificationForm();
        }
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideDeleteModal();
        }
    });

    document.getElementById('deleteClassificationModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideDeleteClassificationModal();
        }
    });

    document.getElementById('editClassificationModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideEditClassificationModal();
        }
    });

    // Add event listeners for delete modal buttons
    document.getElementById('cancelDelete').addEventListener('click', function() {
        hideDeleteModal();
    });

    document.getElementById('confirmDelete').addEventListener('click', function() {
        // Here you would typically handle the delete action
        hideDeleteModal();
    });

    document.getElementById('cancelDeleteClassification').addEventListener('click', function() {
        hideDeleteClassificationModal();
    });

    document.getElementById('confirmDeleteClassification').addEventListener('click', function() {
        // Here you would typically handle the classification delete action
        hideDeleteClassificationModal();
    });
});
</script>

</div>
