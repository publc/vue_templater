<template>
    <div class="navbar">
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
        position: fixed;
        top: 0;
        right: -250px;
        width: 250px;
        height: 100vh;
        @include flex(column nowrap, start);
        background-color: #fafafa;
        transition: transform .5s ease-in-out;

        &.open {
            transform: translateX(-250px);
        }

        .nav-menu {
            width: 100%;
            margin: 0;
            padding: 20px 0;
            @include flex(column nowrap, center);
            list-style: none;

           .nav-item {
               width: 100%;
               margin: 10px 0;
               @include flex();

               .nav-link {
                    width: 100%;
                    text-align: center;
                    @include link($mainColor, .9em, 15px 0);
                    transition: background-color .3s ease-in-out;

                   &:hover {
                       color: #fafafa;
                       background-color: green;
                   }
               }
           }
        }
    }
</style>