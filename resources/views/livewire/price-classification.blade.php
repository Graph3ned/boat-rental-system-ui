<div class="min-h-full p-4">
    <div class="w-full rounded-lg relative overflow-hidden shadow-xl">
        <!-- Main Content Card -->
        <div class="bg-white rounded-xl shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-2xl">
            <!-- Header -->
            <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-white">{{ str_replace('_', ' ', $ride_type) }}</h2>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6">
                <!-- Action Buttons -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                    <button wire:navigate 
                            href="/admin/addPriceClassification/{{ $ride_type }}" 
                            class="inline-flex justify-center items-center px-6 py-2.5
                                   bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                                   text-white rounded-lg transition-all duration-200 font-medium text-sm
                                   shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Classification
                    </button>

                    <button wire:click="confirmDelete('{{ $ride_type }}')"
                            class="inline-flex justify-center items-center px-6 py-2.5
                                   bg-red-500 hover:bg-red-600 text-white rounded-lg 
                                   transition-all duration-200 font-medium text-sm
                                   shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Delete
                    </button>

                    <button wire:navigate 
                            href="/admin/editRide/{{ $ride_type }}"
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
                            @foreach ($prices as $price)
                                <tr class="hover:bg-gray-50/50 transition-colors duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ str_replace('_', ' ', $price->classification) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        ₱{{ number_format($price->price_per_hour, 2) }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <button wire:click="classificationConfirmDelete('{{ $price->id }}')"
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 
                                                           text-white rounded-lg transition-all duration-200 text-sm
                                                           shadow hover:shadow-md transform hover:-translate-y-0.5">
                                                Delete
                                            </button>
                                            <button wire:navigate 
                                                    href="/admin/priceEdit/{{ $price->id }}"
                                                    class="inline-flex items-center px-3 py-1.5
                                                           bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700
                                                           text-white rounded-lg transition-all duration-200 text-sm
                                                           shadow hover:shadow-md transform hover:-translate-y-0.5">
                                                Edit
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Back Button -->
                <div class="mt-6 flex justify-end">
                    <button wire:navigate 
                            href="/admin/prices"
                            class="inline-flex items-center px-6 py-2.5
                                   bg-gray-600 hover:bg-gray-700 text-white rounded-lg 
                                   transition-all duration-200 font-medium text-sm
                                   shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to prices
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    @if ($showModal)
        <div class="fixed z-50 inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center">
            <div class="bg-white rounded-xl shadow-xl p-6 max-w-md mx-auto">
                <div class="text-center">
                    <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">{{ $modalDetails }}</h3>
                    <div class="flex justify-center space-x-3">
                        <button wire:click="delete"
                                class="px-5 py-2.5 bg-red-500 hover:bg-red-600 text-white rounded-lg font-medium transition-all duration-200">
                            Yes, I'm sure
                        </button>
                        <button wire:click="closeModal"
                                class="px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg font-medium transition-all duration-200">
                            No, cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Classification Delete Modal -->
    @if ($classificationShowModal)
        <div class="fixed z-50 inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center">
            <div class="bg-white rounded-xl shadow-xl p-6 max-w-md mx-auto">
                <div class="text-center">
                    <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">{{ $classificationModalDetails }}</h3>
                    <div class="flex justify-center space-x-3">
                        <button wire:click="deleteClassification"
                                class="px-5 py-2.5 bg-red-500 hover:bg-red-600 text-white rounded-lg font-medium transition-all duration-200">
                            Yes, I'm sure
                        </button>
                        <button wire:click="classificationCloseModal"
                                class="px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg font-medium transition-all duration-200">
                            No, cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
