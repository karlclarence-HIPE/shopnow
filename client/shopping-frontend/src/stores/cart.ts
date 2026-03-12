import { defineStore } from "pinia";
import { ref, computed } from "vue";
import type { Product } from "../types/product";
import type { User } from "../types/user";

export const useCartStore = defineStore("cart", () => {
  const products = ref<Product | null>(null);
  const user = ref<User | null>(null);
  const loading = ref(false);

  const isAuthenticated = computed(() => !!user.value);

  const addToCart = async () => {};

  const fetchProducts = async () => {
    if (isAuthenticated) {
    }
  };

  return {
    products,
    loading,
    addToCart,
    fetchProducts,
  };
});
