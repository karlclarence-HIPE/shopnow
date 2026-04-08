<script setup lang="ts">
import LayoutView from '../../layout/LayoutView.vue';
import product2 from '../../assets/products/Product2.jpeg';
import product4 from '../../assets/products/Product4.png';
</script>
<template>
    <LayoutView>
        <div class="min-h-screen flex flex-col items-center justify-center">
            <div class="w-[75vw] max-h-100 overflow-y-auto mt-30">
                <table class="border-separate border-spacing-y-4 w-full">
                    <thead class="sticky top-0 z-10 shadow-md bg-white">
                        <tr class="bg-white-100">
                            <th class="font-normal text-left p-4">Product</th>
                            <th class="font-normal text-left p-4">Price</th>
                            <th class="font-normal text-left p-4">Quantity</th>
                            <th class="font-normal text-left p-4">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="bg-white-100 rounded-lg shadow-sm">
                            <td class="p-4 flex items-center gap-4">
                                <img :src="product2" alt="" class="w-[9vh]">
                                <p class="w-1/3 truncate">LCD Monitor</p>
                            </td>
                            <td class="p-4">$500</td>
                            <td class="p-4">
                                <div class="relative flex items-center">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter
                                        class="shrink-0 text-heading border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-10 text-center"
                                        placeholder="" value="12" required />
                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14m-7 7V5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="p-4">$500</td>
                        </tr>
                        <tr class="bg-white-100 rounded-lg shadow-sm">
                            <td class="p-4 flex items-center gap-4">
                                <img :src="product4" alt="" class="w-[9vh]">
                                <p class="w-1/3 truncate">Hi Gamepad</p>
                            </td>
                            <td class="p-4">$500</td>
                            <td class="p-4">
                                <div class="relative flex items-center">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter
                                        class="shrink-0 text-heading border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-10 text-center"
                                        placeholder="" value="12" required />
                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14m-7 7V5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="p-4">$500</td>
                        </tr>
                        <tr class="bg-white-100 rounded-lg shadow-sm">
                            <td class="p-4 flex items-center gap-4">
                                <img :src="product4" alt="" class="w-[9vh]">
                                <p class="w-1/3 truncate">Hi Gamepad</p>
                            </td>
                            <td class="p-4">$500</td>
                            <td class="p-4">
                                <div class="relative flex items-center">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter
                                        class="shrink-0 text-heading border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-10 text-center"
                                        placeholder="" value="12" required />
                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14m-7 7V5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="p-4">$500</td>
                        </tr>
                        <tr class="bg-white-100 rounded-lg shadow-sm">
                            <td class="p-4 flex items-center gap-4">
                                <img :src="product4" alt="" class="w-[9vh]">
                                <p class="w-1/3 truncate">Hi Gamepad</p>
                            </td>
                            <td class="p-4">$500</td>
                            <td class="p-4">
                                <div class="relative flex items-center">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter
                                        class="shrink-0 text-heading border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-10 text-center"
                                        placeholder="" value="12" required />
                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14m-7 7V5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="p-4">$500</td>
                        </tr>
                        <tr class="bg-white-100 rounded-lg shadow-sm">
                            <td class="p-4 flex items-center gap-4">
                                <img :src="product2" alt="" class="w-[9vh]">
                                <p class="w-1/3 truncate">LCD Monitor</p>
                            </td>
                            <td class="p-4">$500</td>
                            <td class="p-4">
                                <div class="relative flex items-center">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter
                                        class="shrink-0 text-heading border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-10 text-center"
                                        placeholder="" value="12" required />
                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14m-7 7V5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="p-4">$500</td>
                        </tr>
                        <tr class="bg-white-100 rounded-lg shadow-sm">
                            <td class="p-4 flex items-center gap-4">
                                <img :src="product2" alt="" class="w-[9vh]">
                                <p class="w-1/3 truncate">LCD Monitor</p>
                            </td>
                            <td class="p-4">$500</td>
                            <td class="p-4">
                                <div class="relative flex items-center">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14" />
                                        </svg>
                                    </button>
                                    <input type="text" id="counter-input" data-input-counter
                                        class="shrink-0 text-heading border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-10 text-center"
                                        placeholder="" value="12" required />
                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="counter-input"
                                        class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary rounded-full text-sm focus:outline-none h-6 w-6">
                                        <svg class="w-3 h-3 text-heading" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M5 12h14m-7 7V5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="p-4">$500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-[75vw] flex items-center justify-between pt-5 pb-5">
                <button class="border p-2 rounded-sm text-sm">
                    Return to Shop
                </button>
                <button class="border p-2 rounded-sm text-sm">
                    Update Cart
                </button>
            </div>
            <div class="border rounded-sm p-5 w-[30vw] m-10">
                <h2 class="text-xl text-start pb-2">
                    Cart Total
                </h2>
                <div class="flex justify-start flex-col gap-2">
                    <div class="flex flex-row justify-between">
                        <p class="text-sm">Subtotal:</p>
                        <p class="text-sm">$89</p>
                    </div>
                    <hr class="w-full h-px my-2 bg-black border-0">
                    <div class="flex flex-row justify-between">
                        <p class="text-sm">Shipping:</p>
                        <p class="text-sm">$89</p>
                    </div>
                    <hr class="w-full h-px my-2 bg-black border-0">
                    <div class="flex flex-row justify-between">
                        <p class="text-sm">Total:</p>
                        <p class="text-sm">$1000</p>
                    </div>
                    <button class="border p-2 rounded-sm text-sm mt-5 text-white bg-[#D94343]">
                        Proceed to checkout
                    </button>
                </div>
            </div>
        </div>
    </LayoutView>
</template>