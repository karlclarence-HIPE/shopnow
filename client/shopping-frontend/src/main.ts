import { createApp } from "vue";
import { createPinia } from "pinia";
import "./style.css";
import App from "./App.vue";
import router from "./router";
import { OhVueIcon, addIcons } from "oh-vue-icons";
import * as FaIcons from "oh-vue-icons/icons/fa";

const pinia = createPinia();
const app = createApp(App);
const Fa = Object.values({...FaIcons});

addIcons(...Fa);

app.use(pinia);
app.use(router);
app.component("v-icon", OhVueIcon);
app.mount("#app");
