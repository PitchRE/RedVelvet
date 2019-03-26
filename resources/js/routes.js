import Home from "./components/Home.vue";
import videobg from "./components/video-bg.vue";
import HelloWorld from "./components/HelloWorld.vue";
import Joy from "./components/joy.vue";
import Yeri from "./components/yeri.vue";
import Seulgi from "./components/seulgi.vue";
import Wendy from "./components/wendy.vue";
import Album_SummerMagic from "./components/albums/SummerMagic.vue"


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
        path: "/Yeri",
        component: Yeri
    },
    {
        path: "/Seulgi",
        component: Seulgi
    },
    {
        path: "/Wendy",
        component: Wendy
    },
    {
        path: "/SummerMagic",
        component: Album_SummerMagic
    },
    {
        path: "/*",
        redirect: { name: "route-name" }
    }
];
