<script setup lang="ts">
import NavBar from '../../components/nav/NavBar.vue';
import FooterView from '../../components/global/FooterView.vue';
import padlock_img from '../../assets/padlock.png';
</script>
<template>
    <NavBar />
    <div class="min-h-screen flex items-center justify-center pt-10">
        <form action="" class="flex flex-row items-center justify-center w-full h-full">
            <div class="w-full flex flex-row items-center justify-center bg-gray-200">
                <img :src="padlock_img" alt="">
            </div>
            <div class="w-full flex flex-col items-center justify-center">
                <div class="flex flex-col items-start justify-center z-0 mb-5 group w-1/2">
                    <h2 class="text-2xl">Reset Password</h2>
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                    <input type="email" name="email" id="email"
                        class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                        placeholder=" " required />
                    <label for="email"
                        class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email
                        address <span class="text-red-500">*</span></label>
                </div>
                <div class="w-full flex flex-col items-center justify-between mb-5">
                    <button type="submit"
                        class="text-white inset-0 bg-black focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded rounded-base text-sm px-4 py-2.5 cursor-pointer w-1/2 hover:opacity-10">Send
                        Code to Reset</button>

                </div>
                <div class="w-1/2 flex flex-row items-center justify-between">
                    <a href="/auth/login" class="font-medium  hover:underline text-blue-500">Login</a>
                </div>
            </div>
        </form>
    </div>
    <FooterView />
</template>