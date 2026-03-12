<script setup lang="ts">
import shop from '../../assets/shop.png';
import { onMounted, reactive } from 'vue';
import { useUserStore } from '../../stores/user';
import { useAuthStore } from '../../stores/auth';
import { useRouter } from 'vue-router';
import LayoutView from '../../layout/LayoutView.vue';
import type { RegisterRequest } from '../../types/auth';
import TextBox from '../../components/input/TextBox.vue';
import TextLabel from '../../components/input/TextLabel.vue';

const authStore = useAuthStore();
const userStore = useUserStore();
const router = useRouter();

onMounted(() => {
    if (authStore.token) {
        router.push("/home")
    }
})

const data = reactive<RegisterRequest>({
    name: "",
    email: "",
    password: "",
})

const resetForm = () => {
    data.name = "";
    data.email = "";
    data.password = "";
}

const submitForm = async (payload: RegisterRequest) => {
    const response = await userStore.registerUser(payload);

    if (response?.status) {
        resetForm();
    };
}

</script>
<template>
    <LayoutView>
        <form @submit.prevent="submitForm(data)" class="flex flex-row items-center justify-center w-full h-screen">
            <div class="w-[200vw] md:w-full flex flex-col items-center justify-center">
                <div class="flex flex-col items-start justify-center z-0 mb-5 group w-1/2">
                    <h2 class="text-2xl">Create an Account to ShopNow</h2>
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                    <TextBox v-model="data.name" type="name" name="email" id="name" placeholder=" " :required="true"
                        className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                    <TextLabel for="name"
                        className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        title="Name" :required="true" spanClassName="text-red-500" />
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                    <TextBox v-model="data.email" type="email" name="email" id="email" placeholder=" " :required="true"
                        className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                    <TextLabel for="email"
                        className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        title="Email Address" :required="true" spanClassName="text-red-500" />
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                    <TextBox v-model="data.password" type="password" name="password" id="password"
                        className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                        :required="true" placeholder=" " />
                    <TextLabel for="password"
                        className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                        title="Password" :required="true" spanClassName="text-red-500" />
                </div>
                <div class="relative z-0 w-1/2 mb-5 group">
                </div>
                <div class="w-full flex flex-row items-center justify-center mb-5">
                    <button type="submit"
                        class="text-white inset-0 bg-black focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded rounded-base text-sm px-4 py-2.5 cursor-pointer w-1/2 hover:opacity-10">Sign
                        Up</button>
                </div>
                <div class="w-1/2 flex flex-row items-center justify-between">
                    <p class="text-sm font-light text-gray-400">
                        Already have an account? <a href="/auth/login"
                            class="font-medium  hover:underline text-blue-500">Login</a>
                    </p>
                </div>
            </div>
            <div class="hidden w-full md:flex flex-row items-center justify-center bg-gray-200">
                <img :src="shop" alt="">
            </div>
        </form>
    </LayoutView>
</template>