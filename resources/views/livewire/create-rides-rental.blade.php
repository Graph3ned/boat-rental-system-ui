<div class="min-h-full">
    <div class="w-full max-w-lg p-6 bg-white rounded-lg relative overflow-hidden border-double border-4 border-[#00A3E0] mx-auto">
        <h1 class="text-2xl font-bold text-center mb-6 text-[#00A3E0]">Add a Ride</h1>

        @if (session()->has('message'))
            <div class="mb-4 p-4 bg-green-200 text-green-800 rounded-lg">
                {{ session('message') }}
            </div>
        @endif
        
        <form wire:submit.prevent="submit">
            <!-- Ride Type Dropdown -->
            <div class="mb-4">
                <label for="rideType" class="block text-sm font-medium text-gray-700">Ride Type</label>
                <select wire:model.live="rideType" 
                    id="rideType" 
                    class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50">
                    <option value="" disabled>Select Ride Type</option>
                    @foreach(array_keys($prices) as $type)
                        <option value="{{ $type }}">{{ ucfirst(str_replace('_', ' ', $type)) }}</option>
                    @endforeach
                </select>
                @error('rideType')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Classification Dropdown -->
            <div class="mb-4">
                <label for="classification" class="block text-sm font-medium text-gray-700">Classification</label>
                <select wire:model.live="classification" id="classification" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                    <option value="" disabled>Select Classification</option>
                    @if($rideType && isset($prices[$rideType]))
                        @foreach($prices[$rideType] as $key => $value)
                            <!-- Display only the part after the hyphen -->
                            <!-- <option value="{{ $key }}">{{ \Str::after($key, '-') }}</option> -->
                            <option value="{{ $key }}">{{ ucfirst(str_replace('_', ' ', $key)) }}</option>
                        @endforeach
                    @endif
                </select>
                @error('classification')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="note" class="block text-sm font-medium text-gray-700">Note:</label>
                <textarea 
                    wire:model="note" 
                    id="note" 
                    rows="3" 
                    class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:border-[#00A3E0] focus:ring focus:ring-[#00A3E0] focus:ring-opacity-50"
                    placeholder="Enter any additional notes here..."
                ></textarea>
                @error('note')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>

            <!-- life jacket usage -->
            <div class="mb-4">
                    <label for="life_jacket_usage" class="block text-sm font-medium text-gray-700">life jacket usage</label>
                    <select wire:model.live="life_jacket_usage" id="life_jacket_usage" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    @error('life_jacket_usage')
                        <div class="text-red-500">{{$message}}</div>
                    @enderror
                </div>

            <!-- Predefined Duration Dropdown (only show when custom duration is not selected) -->
            @if(!$showCustomDuration)
                <div class="mb-4">
                    <label for="predefinedDuration" class="block text-sm font-medium text-gray-700">Duration</label>
                    <select wire:model.live="duration" id="predefinedDuration" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                        <option value="60">1 Hour</option>
                        <option value="30">30 minutes</option>
                        <option value="120">2 Hours</option>
                        <option value="180">3 Hours</option>
                        <option value="240">4 Hours</option>
                        <option value="300">5 Hours</option>
                    </select>
                    @error('duration')
                        <div class="text-red-500">{{$message}}</div>
                    @enderror
                </div>
            @endif

            

            <!-- Custom Duration Input (only show if checkbox is checked) -->
            <div class="mb-4" @if(!$showCustomDuration) style="display:none" @endif>
                <label for="customDuration" class="block text-sm font-medium text-gray-700">Custom Duration (minutes)</label>
                <input wire:model.live="customDuration" id="customDuration" type="number" min="1" class="block w-full mt-1 rounded-lg border-gray-300 shadow-sm">
                @error('customDuration')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>

            <!-- Custom Duration Toggle -->
            <div class="mb-4 flex items-center">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" wire:model.live="showCustomDuration" value="" class="sr-only peer" {{ $showCustomDuration ? 'checked' : '' }}>
                    <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-sky-300 dark:peer-focus:ring-sky-800 dark:bg-sky-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-sky-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-sky-600 peer-checked:bg-sky-600"></div>
                    <span class="ms-3 text-sm font-medium text-slate-700">Custom Duration</span>
                </label>
            </div>


            <!-- Total Price Display -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Price</label>
                <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">₱{{ number_format((int) $totalPrice, 0) }}</p>
                @error('totalPrice')
                    <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>


            <!-- Time Start & End -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Time Started</label>
                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ \Carbon\Carbon::parse($timeStart)->format('h:i A') }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Time Ended</label>
                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ \Carbon\Carbon::parse($timeEnd)->format('h:i A') }}</p>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex space-x-4">
                <button type="button" 
                    wire:navigate 
                    href="/staff/dashboard"
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
</div>
