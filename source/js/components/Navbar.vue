<template>
    <div class="navbar">
        <a href="#" class="logo">amega</a>
        <ul class="nav-menu">
            <li class="nav-item" v-for="(link, i) in links" :key="i">
                <a :href="`#${link.to}`" 
                    class="nav-link"
                    @click.prevent="navigate(link.to)">{{ link.name }}</a>
            </li>
        </ul>
    </div>
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
        height: 60px;
        @include container;
        @include flex(row nowrap, space-between);

        .logo {
            @include link(red, 1.8em, 0, lowercase);
        }

        .nav-menu {
            @include flex(row nowrap, space-around);
            list-style: none;
           .nav-item {
               margin: 0 10px;

               .nav-link {
                   @include link($mainColor, .9em, 0 10px);
               }
           }
        }
    }
</style>


