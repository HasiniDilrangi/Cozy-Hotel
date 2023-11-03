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
                                <div>
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="">Select category</option>
                                        <option value="AC Single">AC Single</option>
                                        <option value="NON AC Single">NON AC Single</option>
                                        <option value="AC Family">AC Family</option>
                                        <option value="NON AC Family">NON AC Family</option>
                                    </select>
                                </div>
        
                                  <div>
                                      <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Number</label>
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
                                  Add New Room
                              </button>
                          </form>
                      </div>
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>