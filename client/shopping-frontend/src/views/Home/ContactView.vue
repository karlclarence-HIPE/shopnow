<script setup lang="ts">
import LayoutView from '../../layout/LayoutView.vue';
import TextBox from '../../components/input/TextBox.vue';
import { reactive, onMounted } from 'vue';
import type { ContactRequest } from '../../types/contact';
import TextArea from '../../components/input/TextArea.vue';
import BaseButton from '../../components/input/BaseButton.vue';
import { useAuthStore } from '../../stores/auth';

const authStore = useAuthStore();

onMounted(() => {
    if (!authStore.token) {
        authStore.refresh();
    }
})

const data = reactive<ContactRequest>({
    name: "",
    email: "",
    phone: "",
    message: "",
})

</script>
<template>
    <LayoutView>
        <div class="min-h-screen flex flex-row items-center justify-center pt-5 px-30 gap-3">
            <div class="h-full flex-1 py-10 px-8 shadow-md flex flex-col items-center gap-4">
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <v-icon name="fa-phone-square-alt" color="red" scale="2" />
                        <p class="text-md">Call to us</p>
                    </div>
                    <p class="text-sm">We are available 24/7, 7 days a week</p>
                    <p class="text-sm">Phone: 09123456789</p>
                </div>
                <hr class="w-full h-px my-8 bg-black border-0">
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <v-icon name="fa-phone-square-alt" color="red" scale="2" />
                        <p class="text-md">Call to us</p>
                    </div>
                    <p class="text-sm">Fill out our form and we will contact you within 24 hours.</p>
                    <p class="text-sm">Email: customer@exclusive.com</p>
                </div>
            </div>
            <div class="h-full flex-3 py-10 px-8 shadow-md flex flex-col items-center gap-5">
                <div class="flex flex-row items-center justify-center gap-20">
                    <TextBox v-model="data.name" type="text" name="name" id="name" :required="true"
                        placeholder="Your Name" className="bg-gray-100 py-2 px-4 outline-0" />
                    <TextBox v-model="data.name" type="text" name="name" id="name" :required="true"
                        placeholder="Your Name" className="bg-gray-100 py-2 px-4 outline-0" />
                    <TextBox v-model="data.name" type="text" name="name" id="name" :required="true"
                        placeholder="Your Name" className="bg-gray-100 py-2 px-4 outline-0" />
                </div>
                <TextArea v-model="data.message" id="message" name="message" placeholder="Your Message"
                    className="bg-gray-100 py-2 px-4 outline-0 h-[26vh] w-full" />
                <BaseButton name="Send Message" type="submit"
                    className="bg-[#D94343] text-white rounded-sm w-[10vw] h-[5vh]" />
            </div>
        </div>
    </LayoutView>

</template>