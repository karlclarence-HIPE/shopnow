import axios from "axios";
import { useAuthStore } from "../stores/auth";

const api = axios.create({
  baseURL: "http://localhost:8001/api/v1",
  withCredentials: true,
  headers: {
    "Content-Type": "application/json",
    Accept: "application/json",
  },
});

api.interceptors.request.use((config) => {
  const token = sessionStorage.getItem("accessToken");
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});

api.interceptors.response.use(
  (response) => response,
  async (error) => {
    const authStore = useAuthStore();
    if (error.response?.status === 401) {
      try {
        const data = await authStore.refresh();

        authStore.token = data.accessToken;
        error.config.headers.Authorization = `Bearer ${data.accessToken}`;

        return api(error.config);
      } catch {
        authStore.logout();
      }
    }
    return Promise.reject(error);
  },
);
export default api;
