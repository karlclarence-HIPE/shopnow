import api from "./axios";
import type { ItemRequest } from "../types/cart";

export const carts = () => api.get("/carts/");
export const store = (payload: ItemRequest) =>
  api.post("/carts/add-to-cart", payload);
export const remove = (payload: ItemRequest) => api.post("", payload);
