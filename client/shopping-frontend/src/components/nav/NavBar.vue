<script setup lang="ts"></script>
<template>
    <div
        class="hidden md:flex fixed flex-row justify-between items-center w-full h-[10vh] border-b border-gray-300 bg-white z-10 p-5">
        <div>
            <h2 class="text-2xl font-bold">ShopNow</h2>
        </div>
        <div class="flex flex-row justify-center items-center">
            <ul class="flex flex-row justify-between items-center gap-10">
                <li><a href="" class="text-base">Home</a></li>
                <li><a href="" class="text-base">Contact</a></li>
                <li><a href="" class="text-base">About</a></li>
                <li><a href="" class="text-base">Sign Up</a></li>
            </ul>
        </div>
        <div class="flex justify-center items-center">
            <form class="max-w-md w-full">
                <label for="search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-body" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>

                    <input type="search" id="search" placeholder="Search" required
                        class="block w-full p-3 ps-9 text-sm text-heading bg-transparent border-0 border-b-2 border-black focus:border-b-2 placeholder:text-body rounded-none outline-none" />

                    <button type="button"
                        class="absolute end-1.5 bottom-1.5 text-white bg-brand hover:bg-brand-strong border border-transparent focus:ring-4 focus:ring-brand-medium font-medium text-xs px-3 py-1.5 rounded focus:outline-none">
                        Search
                    </button>
                </div>
            </form>
        </div>

    </div>
</template>