<template>
    <div>
        <am-header></am-header>
        <am-principal></am-principal>
        <am-services></am-services>
        <am-products></am-products>
        <am-contact></am-contact>
        <am-footer></am-footer>
    </div>
</template>

<script>
import Header from '../components/Header.vue';
import Principal from './Principal.vue';
import Services from './Services.vue';
import Products from './Products.vue';
import Contact from './Contact.vue';
import Footer from '../components/Footer.vue';
export default {
    components: {
    'am-header': Header,
    'am-principal': Principal,        
    'am-services': Services,        
    'am-products': Products,
    'am-contact': Contact,
    'am-footer': Footer

    }
}
</script>





