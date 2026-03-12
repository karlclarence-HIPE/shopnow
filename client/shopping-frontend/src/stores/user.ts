import { defineStore } from "pinia";
import { ref, computed } from "vue";
import type { User } from "../types/user";
import * as UserApi from "../api/user.api";
import type { RegisterRequest } from "../types/auth";

export const useUserStore = defineStore("user", () => {
  const user = ref<User | null>(null);
  const loading = ref(false);

  const isAuthenticated = computed(() => !!user.value);

  const registerUser = async (payload: RegisterRequest) => {
    loading.value = true;
    try {
      const response = await UserApi.signup(payload);

      return response;
    } catch (e) {
      console.error(e);
    }
  };

  return {
    user,
    loading,
    isAuthenticated,
    registerUser,
  };
});
