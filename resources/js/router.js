import Vue from "vue";
import VueRouter from "vue-router";
import PostList from "./components/pages/PostList";
import Post from "./components/pages/Post";

//

const routes = [

    {
        path: "/",
        name: "Index",
        component: PostList,
    },
    {
        path: "/post/:id",
        name: "POST",
        component: Post 

    },
];

//Router
Vue.use(VueRouter);

const router = new VueRouter({
    mode:"history",
    routes
});

export default router;
