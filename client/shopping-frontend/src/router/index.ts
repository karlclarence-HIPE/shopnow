import { createRouter, createWebHistory } from "vue-router";
import LoginView from "../views/Auth/LoginView.vue";
import SignUpView from "../views/Auth/SignUpView.vue";
import HomeView from "../views/Home/HomeView.vue";
import ContactView from "../views/Home/ContactView.vue";
import AboutView from "../views/Home/AboutView.vue";
import ForgotPassView from "../views/Auth/ForgotPassView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "login",
      component: LoginView,
    },
    {
      path: "/auth/login",
      name: "login",
      component: LoginView,
    },
    {
      path: "/auth/sign-up",
      name: "sign-up",
      component: SignUpView,
    },
    {
      path: "/home",
      name: "home",
      component: HomeView,
    },
    {
      path: "/contact",
      name: "contact",
      component: ContactView,
    },
    {
      path: "/about",
      name: "about",
      component: AboutView,
    },
    {
      path: "/auth/forgot-password",
      name: "forgot-password",
      component: ForgotPassView,
    },
  ],
});

export default router;
