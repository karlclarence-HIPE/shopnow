import { defineStore } from "pinia";
import { ref, computed } from "vue";
import type { User } from "../types/user";

export const useUserStore = defineStore("user", () => {
  const user = ref<User | null>(null);
  const loading = ref(false);

  const isAuthenticated = computed(() => !!user.value);

  const setUser = (data: User) => {
    user.value = data;
  };

  const fetchUser = async () => {
    loading.value = true;
  };

  return {
    user,
    loading,
    isAuthenticated,
    setUser,
    fetchUser,
  };
});
