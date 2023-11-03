<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Welcome to Cozy Hotel Managemt Application
    </h1>

</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <a href="{{ url('/createroom') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Create Room Type</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Add new room type with specific details (Room Type,Maximum Gust Capacity and Rate per Night)</p>
    </a>
    <a href="{{ url('/addnewroom') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add New Room</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Add new room  (Room Type,Room Number)</p>
    </a>
    <a href="{{ url('/createreservation') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Create Reservation</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Check in date, Check out date, Room Type and Count</p>
    </a>
    <a href="{{ url('/showroom') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Show and Edit Room Type</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400"></p>
    </a>
    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Show and Reservation</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400"></p>
    </a>
    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cancel Reservation</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400"></p>
    </a>
</div>
