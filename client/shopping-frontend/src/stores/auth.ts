import { defineStore } from "pinia";
import { ref, computed } from "vue";
import type { User } from "../types/user";
import type { LoginRequest } from "../types/user";

export const useAuthStore = defineStore("auth", () => {
  const user = ref<User | null>(null);
  const token = ref<string | null>(null);
  const loading = ref(false);

  const login = async (payload: LoginRequest) => {
    loading.value = true;
    console.log(payload);
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
    logout,
  };
});
