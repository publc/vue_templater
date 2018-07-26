<template>
    <div>
        <am-navbar :links="links" v-if="windowSize"></am-navbar>
        <div v-else>
            <a href="#" class="logo">Logo</a>
            <am-mini-navbar :links="links"></am-mini-navbar>
        </div>
    </div>
</template>

<script>
import Navbar from './Navbar.vue';
import MiniNavbar from './MiniNavbar.vue';
export default {
    data() {
        return {
            links: ['home', 'services', 'products', 'contact']
        }
    },
    components: {
        'am-navbar': Navbar,
        'am-mini-navbar': MiniNavbar
    },
    computed: {
        windowSize() {
            return window.innerWidth > 1040;
        }
    }
}
</script>

<style lang="scss" scoped>

</style>