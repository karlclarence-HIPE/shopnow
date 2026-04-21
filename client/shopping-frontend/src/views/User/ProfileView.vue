<script setup lang="ts">
import { onMounted, reactive } from 'vue';
import LayoutView from '../../layout/LayoutView.vue';
import { useAuthStore } from '../../stores/auth';
import TextBox from '../../components/input/TextBox.vue';
import type { ProfileRequest } from '../../types/profile';
import TextLabel from '../../components/input/TextLabel.vue';
import BaseButton from '../../components/input/BaseButton.vue';

const authStore = useAuthStore();

onMounted(async () => {
    if (!authStore.token) {
        await authStore.refresh();
    }
})

const data = reactive<ProfileRequest>({
    firstName: "",
    lastName: "",
    email: "",
    address: "",
    currentPassword: "",
    newPassword: "",
    confirmNewPassword: "",
})

</script>
<template>
    <LayoutView>
        <div class="min-h-screen flex flex-row items-center justify-center pt-10">
            <div class="flex flex-col gap-3 flex-1 items-center justify-center">
                <form class="w-1/2 ">
                    <div>
                        <h2 class="text-2xl text-red-500 mb-4">Edit your profile</h2>
                    </div>
                    <div class="flex flex-row gap-10">
                        <div class="relative z-0 w-1/2 mb-5 group">
                            <TextBox v-model="data.firstName" type="text" name="firstName" id="firstName"
                                placeholder=" " :required="true"
                                className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                            <TextLabel for="firstName"
                                className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                                title="First Name" :required="true" spanClassName="text-red-500" />
                        </div>
                        <div class="relative z-0 w-1/2 mb-5 group">
                            <TextBox v-model="data.lastName" type="text" name="lastName" id="lastName" placeholder=" "
                                :required="true"
                                className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                            <TextLabel for="lastName"
                                className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                                title="Last Name" :required="true" spanClassName="text-red-500" />
                        </div>
                    </div>
                    <div class="flex flex-row gap-10">
                        <div class="relative z-0 w-1/2 mb-5 group">
                            <TextBox v-model="data.email" type="email" name="email" id="email" placeholder=" "
                                :required="true"
                                className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                            <TextLabel for="email"
                                className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                                title="Email" :required="true" spanClassName="text-red-500" />
                        </div>
                        <div class="relative z-0 w-1/2 mb-5 group">
                            <TextBox v-model="data.address" type="address" name="address" id="address" placeholder=" "
                                :required="true"
                                className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                            <TextLabel for="address"
                                className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                                title="Address" :required="true" spanClassName="text-red-500" />
                        </div>
                    </div>
                    <div class="flex flex-row gap-10">
                        <div class="relative z-0 w-full mb-5 group">
                            <TextBox v-model="data.currentPassword" type="currentPassword" name="currentPassword"
                                id="currentPassword" placeholder=" " :required="true"
                                className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                            <TextLabel for="currentPassword"
                                className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                                title="Current Password" :required="true" spanClassName="text-red-500" />
                        </div>
                    </div>
                    <div class="flex flex-row gap-10">
                        <div class="relative z-0 w-full mb-5 group">
                            <TextBox v-model="data.newPassword" type="newPassword" name="newPassword" id="newPassword"
                                placeholder=" " :required="true"
                                className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                            <TextLabel for="newPassword"
                                className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                                title="New Password" :required="true" spanClassName="text-red-500" />
                        </div>
                    </div>
                    <div class="flex flex-row gap-10">
                        <div class="relative z-0 w-full mb-5 group">
                            <TextBox v-model="data.confirmNewPassword" type="confirmNewPassword"
                                name="confirmNewPassword" id="confirmNewPassword" placeholder=" " :required="true"
                                className="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" />
                            <TextLabel for="confirmNewPassword"
                                className="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-left peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
                                title="Confirm New Password" :required="true" spanClassName="text-red-500" />
                        </div>
                    </div>
                    <BaseButton type="submit" name="Cancel"
                        className="text-white inset-0 bg-[#D94343] focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded rounded-base text-sm px-4 py-2.5 cursor-pointer w-1/2 hover:opacity-10" />
                </form>
            </div>
        </div>
    </LayoutView>
</template>