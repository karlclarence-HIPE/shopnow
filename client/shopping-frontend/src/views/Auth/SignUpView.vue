<script setup lang="ts">
import { ref } from 'vue';
import shop from '../../assets/shop.png';
import NavBar from '../../components/nav/NavBar.vue';
import FooterView from '../../components/global/FooterView.vue';

const name = ref('');
const email = ref('');
const password = ref('');
</script>
<template>
    <NavBar />
    <div class="min-h-screen flex items-center justify-center pt-10">
        <form action="" class="flex flex-row items-center justify-center w-full h-full">
            <div class="w-full flex flex-row items-center justify-center bg-gray-200">
                <img :src="shop" alt="">
            </div>
            <div class="w-full flex flex-col items-center justify-center">
                <div class="flex flex-col items-start justify-center z-0 mb-5 group w-1/2">
                    <h2 class="text-2xl">Create an Account for ShopNow</h2>
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                    <input type="text" name="name" id="name"
                        class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                        placeholder=" " required />
                    <label for="name"
                        class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Name</label>
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                    <input type="email" name="email" id="email"
                        class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                        placeholder=" " required />
                    <label for="email"
                        class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email
                        address</label>
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                    <input type="password" name="password" id="password"
                        class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                        placeholder=" " required />
                    <label for="password"
                        class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password</label>
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                    <input type="confirmPassword" name="confirmPassword" id="confirmPassword"
                        class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                        placeholder=" " required />
                    <label for="confirmPassword"
                        class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Confirm
                        Password</label>
                </div>
                <div class="flex w-1/2 items-center gap-2 mb-5">
                    <input type="checkbox" id="remember" value=""
                        class="w-4 h-4 text-dark border border-default-medium rounded-xs bg-neutral-secondary "
                        required />
                    <label for="remember" class="flex items-center ">Remember Me</label>
                </div>
                <div class="w-full flex flex-row items-center justify-center mb-5">
                    <button type="submit"
                        class="text-white inset-0 bg-black focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded rounded-base text-sm px-4 py-2.5 cursor-pointer w-1/2 hover:opacity-10">Sign
                        Up</button>
                </div>
                <div class="w-1/2 flex flex-row items-center justify-between">
                    <p class="text-sm font-light text-gray-400">
                        Already have an account? <a href="/login"
                            class="font-medium  hover:underline text-blue-500">Login</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
    <FooterView />
</template>