<template>
    <div>
        <am-navbar :links="links" v-if="windowSize"></am-navbar>
        <div class="mini-nav" v-else>
            <a href="#" class="logo">Logo</a>
            <a href="#" class="menu" 
                @click.prevent="open = !open" :class="open ? 'open' : ''">
                <span class="menu-item"></span>
                <span class="menu-item"></span>
                <span class="menu-item"></span>
            </a>
            <am-mini-navbar :links="links" :class="open ? 'open' : ''"></am-mini-navbar>
        </div>
    </div>
</template>

<script>
import Navbar from './Navbar.vue';
import MiniNavbar from './MiniNavbar.vue';
export default {
    data() {
        return {
            links: [
                {name: 'home', to: 'home'},
                {name: 'servicios', to: 'services'}, 
                {name: 'productos', to: 'products'},
                {name: 'contacto', to: 'contact'}
            ],
            open: false,
            windowSize: true
        }
    },
    components: {
        'am-navbar': Navbar,
        'am-mini-navbar': MiniNavbar
    },
    methods: {
        screenPosition() {
            window.addEventListener('scroll', (event) => {
                this.windowSize = (window.innerWidth > 1040 && window.scrollY <= 500);    
            });
        }
    },
    watch: {
        screenPosition: {
            handler: 'screenPosition',
            immediate: true
        }
    },
    created() {
        this.windowSize = window.innerWidth > 1040;
    }
}
</script>

<style lang="scss" scoped>
@import '~@scss/style.scss';
    .mini-nav {
        height: 50px;
        @include flex();

        .logo {
            @include link(red, 1.6em, 0, lowercase);
        }

        .menu {
            width: 40px;
            height: 40px;
            position: fixed;
            padding: 10px 10px;
            background-color: $mainWhite;
            top: 20px;
            right: 0;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            z-index: 2000;
            transition: transform .5s ease-in-out;
            @include flex(column nowrap, space-around, center);

            span {
                display: block;
                width: 20px;
                height: 3px;
                background-color: $mainColor;
            }

            &.open {
                transform: translateX(-250px);
            }
        }
    }
</style>