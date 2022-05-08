
import './bootstrap'

import Vue from 'vue'
import router from "./router";
import Main from "./Main";

import VueApollo from 'vue-apollo'
import ApolloClient from 'apollo-boost'
Vue.use(VueApollo)

const apolloClient = new ApolloClient({
    uri: 'http://127.0.0.1:8000/graphql'
})
const apolloProvider = new VueApollo({
    defaultClient: apolloClient,
})

const app = new Vue({
    render: h => h(Main),
    router,
    apolloProvider
}).$mount("#app");