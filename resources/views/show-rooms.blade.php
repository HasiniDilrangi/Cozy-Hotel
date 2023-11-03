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
                          <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Show Rooms</h2>
                          
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Room Type
                </th>
            
                <th scope="col" class="px-6 py-3 ">
                    Maximum Gust Capacity
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Rate Per Night
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    AC Single
                </th>
                <td class="px-6 py-4">
                    20
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    $2999
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    AC Single
                </th>
                <td class="px-6 py-4">
                    20
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    $2999
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    AC Single
                </th>
                <td class="px-6 py-4">
                    20
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    $2999
                </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    AC Single
                </th>
                <td class="px-6 py-4">
                    20
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    $2999
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    AC Single
                </th>
                <td class="px-6 py-4">
                    20
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    $2999
                </td>
            </tr>
        </tbody>
    </table>
</div>

                      </div>
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>