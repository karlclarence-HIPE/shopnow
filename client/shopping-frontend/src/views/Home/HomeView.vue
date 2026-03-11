<script setup lang="ts">
import { onMounted } from 'vue';
import { useAuthStore } from '../../stores/auth';
import LayoutView from '../../layout/LayoutView.vue';
import CarouselView from '../../components/CarouselView.vue';
import BannerFlag from '../../components/global/BannerFlag.vue';
import Product1 from '../../assets/products/chair.png';
import Product2 from '../../assets/products/Product2.jpeg';
import Product3 from '../../assets/products/PS5.png';
import Product4 from '../../assets/products/Product4.png';
import ProductCard from '../../components/product/ProductCard.vue';
// import { useRouter } from 'vue-router';

const authStore = useAuthStore();
// const router = useRouter(); 

onMounted(async () => {
    if (!authStore.token) {
        await authStore.refresh();
    }
})

</script>
<template>
    <LayoutView>
        <div class="w-full flex p-10 mt-[4vh]">
            <div class="flex items-start justify-start w-1/3 h-1/3">
                <ul class="flex flex-col gap-2 p-10 border-r border-gray-300 w-full h-[49vh]">
                    <li><button>Woman's Fashion</button></li>
                    <li><button>Men's Fashion</button></li>
                    <li><button>Electronic</button></li>
                    <li><button>Home & Lifestyle</button></li>
                    <li><button>Medicine</button></li>
                    <li><button>Sports & Outdoor</button></li>
                    <li><button>Baby's & Toys</button></li>
                    <li><button>Groceries & Pets</button></li>
                    <li><button>Health & Beauty</button></li>
                </ul>
            </div>
            <div class="w-full p-10">
                <CarouselView />
            </div>
        </div>
        <div class="w-full flex flex-col p-10 mb-[4vh]">
            <div class="flex flex-col items-start justify-start mb-[10vh] gap-4">
                <BannerFlag title="Today's" />
                <div class="">
                    <h2 class="text-2xl/7 font-semibold text-black">Flash Sales</h2>
                </div>
                <div class="w-full overflow-x-auto">
                    <div class="flex flex-row min-w-max gap-10">
                        <ProductCard :image="Product1" productName="Kingdom Chair" price="1200" prevPrice="2000"
                            :starCount="2" ratings="100" />
                        <ProductCard :image="Product3" productName="PlayStation 5" price="29,000" prevPrice="40,000"
                            :starCount="5" ratings="20" />
                        <ProductCard :image="Product2" productName="Yamaha Drums" price="12,200" prevPrice="2000"
                            :starCount="2" ratings="30" />
                        <ProductCard :image="Product4" productName="Xbox Controller" price="800" prevPrice="900"
                            :starCount="3" ratings="40" />
                        <ProductCard :image="Product1" productName="Kingdom Chair" price="1200" prevPrice="2000"
                            :starCount="2" ratings="100" />
                        <ProductCard :image="Product3" productName="PlayStation 5" price="29,000" prevPrice="40,000"
                            :starCount="5" ratings="20" />
                        <ProductCard :image="Product2" productName="Yamaha Drums" price="12,200" prevPrice="2000"
                            :starCount="2" ratings="30" />
                        <ProductCard :image="Product4" productName="Xbox Controller" price="800" prevPrice="900"
                            :starCount="3" ratings="40" />
                        <ProductCard :image="Product1" productName="Kingdom Chair" price="1200" prevPrice="2000"
                            :starCount="2" ratings="100" />
                        <ProductCard :image="Product3" productName="PlayStation 5" price="29,000" prevPrice="40,000"
                            :starCount="5" ratings="20" />
                        <ProductCard :image="Product2" productName="Yamaha Drums" price="12,200" prevPrice="2000"
                            :starCount="2" ratings="30" />
                        <ProductCard :image="Product4" productName="Xbox Controller" price="800" prevPrice="900"
                            :starCount="3" ratings="40" />
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-start justify-start mb-[10vh] gap-4">
                <BannerFlag title="This Month" />
                <div class="flex flex-row w-full items-center justify-between">
                    <h2 class="text-2xl/7 font-semibold text-black ">Best Selling Products</h2>
                    <button class="bg-[#D94343] text-white rounded-sm w-[10vw] h-[5vh]">
                        View All
                    </button>
                </div>
                <div class="w-full overflow-x-auto">
                    <div class="flex flex-row min-w-max gap-10">
                        <ProductCard :image="Product1" productName="Kingdom Chair" price="1200" prevPrice="2000"
                            :starCount="2" ratings="100" />
                        <ProductCard :image="Product3" productName="PlayStation 5" price="29,000" prevPrice="40,000"
                            :starCount="5" ratings="20" />
                        <ProductCard :image="Product2" productName="Yamaha Drums" price="12,200" prevPrice="2000"
                            :starCount="2" ratings="30" />
                        <ProductCard :image="Product4" productName="Xbox Controller" price="800" prevPrice="900"
                            :starCount="3" ratings="40" />
                        <ProductCard :image="Product1" productName="Kingdom Chair" price="1200" prevPrice="2000"
                            :starCount="2" ratings="100" />
                        <ProductCard :image="Product3" productName="PlayStation 5" price="29,000" prevPrice="40,000"
                            :starCount="5" ratings="20" />
                        <ProductCard :image="Product2" productName="Yamaha Drums" price="12,200" prevPrice="2000"
                            :starCount="2" ratings="30" />
                        <ProductCard :image="Product4" productName="Xbox Controller" price="800" prevPrice="900"
                            :starCount="3" ratings="40" />
                        <ProductCard :image="Product1" productName="Kingdom Chair" price="1200" prevPrice="2000"
                            :starCount="2" ratings="100" />
                        <ProductCard :image="Product3" productName="PlayStation 5" price="29,000" prevPrice="40,000"
                            :starCount="5" ratings="20" />
                        <ProductCard :image="Product2" productName="Yamaha Drums" price="12,200" prevPrice="2000"
                            :starCount="2" ratings="30" />
                        <ProductCard :image="Product4" productName="Xbox Controller" price="800" prevPrice="900"
                            :starCount="3" ratings="40" />
                    </div>
                </div>
            </div>
        </div>
    </LayoutView>
</template>