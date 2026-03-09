import { defineStore } from "pinia";
import { ref } from "vue";
import type { User } from "../types/user";
import type { LoginRequest } from "../types/auth";
import * as AuthApi from "../api/auth.api";

export const useAuthStore = defineStore("auth", () => {
  const user = ref<User | null>(null);
  const token = ref<string | null>(null);
  const loading = ref(false);

  const login = async (payload: LoginRequest) => {
    loading.value = true;
    try {
      const response = await AuthApi.login(payload);
      console.log(response.data);
      return response.data;
    } catch (e) {
      console.error(e);
    }
  };

  const refresh = async () => {
    const { data } = await AuthApi.refresh();
    sessionStorage.setItem("accessToken", data.accessToken);
    return data;
  };

  const logout = () => {
    user.value = null;
    token.value = null;
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
