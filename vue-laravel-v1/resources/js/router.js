import { createRouter, createWebHistory } from "vue-router";

import Inicio from "./components/Inicio.vue";
import Nosotros from "./components/Nosotros.vue";
import Notfound from "./components/Notfound.vue";

const routes = [
    {path: "/inicio", component: Inicio},
    {path: "/nosotros", component: Nosotros},
    {path: "/:pathMatch(.*)*", component: Notfound},
];

const history = createWebHistory();

const router = createRouter({
    history,
    routes
});

export default router;