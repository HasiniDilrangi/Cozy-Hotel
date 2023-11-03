<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cozy Hotel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-12">
                    <section class="">
                      <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                          <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a New Room</h2>
                          <form action="#">
                              <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div date-rangepicker class="flex items-center">
                                    <div class="relative">
                                      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                          </svg>
                                      </div>
                                      <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative">
    
                                  <div>
                                      <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maximum Guest Capacity</label>
                                      <input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12" required="">
                                  </div> 
                                  <div>
                                    <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maximum Guest Capacity</label>
                                    <input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12" required="">
                                </div> 
                                  <div class="sm:col-span-2">
                                      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                      <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                                  </div>
                              </div>
                              <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800" style=" display: inline-flex;
                              align-items: center;
                              padding: 2.5px 5px;
                              margin-top: 8px;
                              font-size: small;
                              font-weight: 500;
                              text-align: center;
                              color: white;
                              background-color: #1e40af; 
                              border-radius: 0.375rem; "
                             >
                                  Add Reservation
                              </button>
                          </form>
                      </div>
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>