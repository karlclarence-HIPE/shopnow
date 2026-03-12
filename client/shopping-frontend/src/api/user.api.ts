import api from "./axios";
import type { RegisterRequest } from "../types/auth";

export const signup = (payload: RegisterRequest) =>
  api.post("/users/create", payload);
