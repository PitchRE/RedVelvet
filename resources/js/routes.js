import Home from "./components/Home.vue";
import videobg from "./components/video-bg.vue";
import HelloWorld from "./components/HelloWorld.vue";
import Joy from "./components/joy.vue";


export const routes = [
    {
        path: "/",
        component: HelloWorld
    },
    {
        path: "/Joy",
        component: Joy
    },
    {
        path: "/*",
        redirect: { name: "route-name" }
    }
];
