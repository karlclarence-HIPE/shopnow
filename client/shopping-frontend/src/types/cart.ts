import type { Product } from "./product";

export interface ItemRequest {
    id?: number; 
    product: Product;
    quantity: number;
    status: number;
}