<template>
    <div>
        <Header v-if="this.$route.path != '/login'">
        </Header>


        <div class="wrapper">
            <div class="container">
                <Notification></Notification>
                <Breadcrumb></Breadcrumb>


                <router-view></router-view>

            </div>
            <!-- end container -->





        </div>
    </div>
</template>

<script>
    import Navigation from "./components/Layouts/Navigation";
    import Notification from "./components/Layouts/Notification";
    import Header from "./components/Layouts/Header";
    import Breadcrumb from './components/Layouts/Breadcrumb'

    export default {
        name: 'App',
        components: {Navigation, Header, Breadcrumb,Notification},
        created(){

        },
        mounted(){

        }
    }
</script>

<style scoped>

</style>
