<div class="block" x-data="{ open: false }">
    <div @click="open = !open"
        class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
        <div class="flex items-center space-x-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
            <span>CMS</span>
        </div>
        <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7">
            </path>
        </svg>
        <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
            </path>
        </svg>
    </div>
    <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
        <a href="{{ url('/admin/users') }}" class="block px-4 py-2 rounded hover:bg-gray-800 hover:text-white">
            Users
        </a>
        <a href="" class="block px-4 py-2 rounded hover:bg-gray-800 hover:text-white">
            Clients
        </a>
        <a href="{{ url('/admin/projects') }}" class="block px-4 py-2 rounded hover:bg-gray-800 hover:text-white">
            Projects
        </a>
        <a href="{{ url('/admin/tasks') }}" class="block px-4 py-2 rounded hover:bg-gray-800 hover:text-white">
            Tasks
        </a>
    </div>
</div>
