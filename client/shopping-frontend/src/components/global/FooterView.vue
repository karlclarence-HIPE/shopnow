<script setup lang="ts">
import FooterColumn from './FooterColumn.vue';
</script>
<template>
    <div class="hidden md:grid grid-cols-5 bg-black w-full h-full p-[10vh]">
        <FooterColumn title="Exlcusive">
            <p class="text-sm">Subscribe</p>
            <p class="text-sm">Get 10% off your first order</p>
        </FooterColumn>

        <FooterColumn title="Support">
            <p class="text-sm">example@example.com</p>
            <p class="text-sm">1234 Example St, Apt 101, Springfield</p>
        </FooterColumn>

        <FooterColumn title="Account">
            <ul class="flex flex-col gap-2">
                <li><a href="" class="text-sm">My Account</a></li>
                <li><a href="" class="text-sm">Login / Register</a></li>
                <li><a href="" class="text-sm">Cart</a></li>
                <li><a href="" class="text-sm">Wishlist</a></li>
                <li><a href="" class="text-sm">Shop</a></li>
            </ul>
        </FooterColumn>

        <FooterColumn title="Quick Link">
            <ul class="flex flex-col gap-2">
                <li><a href="" class="text-sm">Privacy Policy</a></li>
                <li><a href="" class="text-sm">Terms Of Use</a></li>
                <li><a href="" class="text-sm">FAQ</a></li>
                <li><a href="" class="text-sm">Contact</a></li>
            </ul>
        </FooterColumn>

        <FooterColumn title="Download App">

        </FooterColumn>
    </div>
</template>