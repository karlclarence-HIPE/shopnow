<script setup lang="ts">
import login_image from '../../assets/online-shopping.png';
import LayoutView from '../../layout/LayoutView.vue';
import TextBox from '../../components/input/TextBox.vue';
import TextLabel from '../../components/input/TextLabel.vue';
import type { LoginRequest } from '../../types/auth';
import { useAuthStore } from '../../stores/auth';
import { reactive, onMounted, computed } from 'vue';
import { useRouter } from 'vue-router';

const authStore = useAuthStore();
const router = useRouter();
const hasToken = computed(() => authStore.token);
// let isLoading = computed(() => authStore.loading); 
// let isLoading = ref(false);

onMounted(() => {
    authStore.loading = false;

    if (hasToken.value) {
        router.push("/home")
    }
})

const data = reactive<LoginRequest>({
    email: "",
    password: "",
})

const submitForm = async (payload: LoginRequest) => {
    const response = await authStore.login(payload);

    if (response?.status) {
        router.push("/home")
    }
    return;
}

</script>
<template>
    <LayoutView v-if="!authStore.loading">
        <form  @submit.prevent="submitForm(data)" class="flex flex-row items-center justify-center w-full h-screen">
            <div class="w-full flex flex-row items-center justify-center bg-gray-200">
                <img :src="login_image" alt="">
            </div>
            <div class="w-full flex flex-col items-center justify-center">
                <div class="flex flex-col items-start justify-center z-0 mb-5 group w-1/2">
                    <h2 class="text-2xl">Log in to ShopNow</h2>
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
                <div class="flex w-1/2 items-center gap-2 mb-5">
                    <input type="checkbox" id="remember" value=""
                        class="w-4 h-4 text-dark border border-default-medium rounded-xs bg-neutral-secondary " />
                    <label for="remember" class="flex items-center ">Remember Me</label>
                </div>
                <div class="w-1/2 flex flex-row items-center justify-between mb-5">
                    <button type="submit"
                        class="text-white inset-0 bg-black focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded rounded-base text-sm px-4 py-2.5 cursor-pointer w-1/2 hover:opacity-10">Log
                        In</button>
                    <a href="/auth/forgot-password" type="submit"
                        class="text-dark font-medium leading-5 rounded rounded-base text-sm px-4 py-2.5 cursor-pointer hover:underline">Forgot
                        Password</a>
                </div>
                <div class="w-1/2 flex flex-row items-center justify-between">
                    <p class="text-sm font-light text-gray-400">
                        Don’t have an account yet? <a href="/auth/sign-up"
                            class="font-medium  hover:underline text-blue-500">Sign up</a>
                    </p>
                </div>
            </div>
        </form>
    </LayoutView>
</template>