<template>
    <transition name="slide" :appear="true">
        <div class="navbar">
            <a href="#" class="logo" @click.prevent>amega</a>
            <ul class="nav-menu">
                <li class="nav-item" v-for="(link, i) in links" :key="i">
                    <a :href="`#${link.to}`" 
                        class="nav-link"
                        @click.prevent="navigate(link.to)">{{ link.name }}</a>
                </li>
            </ul>
        </div>
    </transition>
</template>

<script>
export default {
    props: ['links'],
    methods: {
        navigate(link) {
            var link = document.querySelector(`#${link}`);
            link.scrollIntoView({behavior: 'smooth', block: 'start'});
        }
    }
}
</script>

<style lang="scss" scoped>
@import '~@scss/style.scss';

    .navbar {
        height: 80px;
        @include container;
        @include flex(row nowrap, space-between);
        font-family: 'Open Sans', sans-serif;

        .logo {
            @include link($mainRed, 2em, 0, lowercase);
            text-shadow: 2px 2px 3px $mainColor;
        }

        .nav-menu {
            @include flex(row nowrap, space-around);
            list-style: none;
           .nav-item {
               margin: 0 10px;

               .nav-link {
                   @include link($mainWhite, .95em, 0 10px);
                   font-weight: 600;
                   text-shadow: 2px 2px 3px $mainColor;
               }
           }
        }
    }

    .slide-enter-active, .slide-leave-active {
        transition: transform .5s 1s ease-out;
    }

    .slide-enter, .slide-leave-to {
        transform: translateY(-200px);
    }
</style>


