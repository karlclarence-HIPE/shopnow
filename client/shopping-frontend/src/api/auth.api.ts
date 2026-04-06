import api from "./axios";
import type { LoginRequest } from "../types/auth";

export const login = (payload: LoginRequest) =>
  api.post("/auth/login", payload);
export const refresh = () =>
  api.post("/auth/refresh", {}, { withCredentials: true });
export const logout = () => api.post("/auth/logout");
