<template>
    <div class="navbar">
        <ul class="nav-menu">
            <li class="nav-item" v-for="(link, i) in links" :key="i">
                <a :href="`#${link}`" 
                    class="nav-link"
                    @click.prevent="navigate(link)">{{ link }}</a>
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

</style>