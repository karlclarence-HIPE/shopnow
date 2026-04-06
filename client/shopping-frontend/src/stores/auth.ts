import { defineStore } from "pinia";
import { ref } from "vue";
import type { User } from "../types/user";
import type { LoginRequest } from "../types/auth";
import * as AuthApi from "../api/auth.api";

export const useAuthStore = defineStore("auth", () => {
  let user = ref<User | null>(null);
  let token = ref<string | null>(null);
  const loading = ref(false);

  const login = async (payload: LoginRequest) => {
    loading.value = true;
    try {
      const response = await AuthApi.login(payload);
      const data = response.data;

      user.value = data;
      token.value = data.data.accessToken ?? null;

      sessionStorage.setItem("accessToken", data.data.accessToken ?? null);

      loading.value = false;
      return response;
    } catch (e) {
      loading.value = false;
      console.error(e);
    }
  };

  const refresh = async () => {
    loading.value = true;
    try {
      const { data } = await AuthApi.refresh();

      token.value = data.data.accessToken ?? null;

      sessionStorage.setItem("accessToken", data.data.accessToken ?? null);

      loading.value = false;
      return data;
    } catch (error) {
      loading.value = true;
      console.error(error);
    }
  };

  const logout = () => {
    user.value = null;
    token.value = null;
    sessionStorage.clear();
  };

  return {
    user,
    token,
    loading,
    login,
    refresh,
    logout,
  };
});
