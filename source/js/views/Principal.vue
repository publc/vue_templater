<template>
    <section id="home" class="home">
    <div class="inner">
        <div class="container">
            <h1 class="title">reparaci&oacute;n de m&aacute;quinas de caf&eacute; express</h1>
        </div>
    </div>
    </section>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
@import '~@scss/style.scss';
    .home {
        position: relative;
        top: -80px;
        left: 0;
        height: 100vh;
        
        background: url('~@img/principal.jpg');
        background-size: cover;
        z-index: -1;

        .inner {
            width: 100%;
            height: 100vh;
            padding: 100px 0;
            background-color: rgba(0,0,0,0.3);

            .container {
                @include container;

                .title {
                    font-family: 'Open Sans', sans-serif;
                    font-size: 2.5em;
                    color: $mainWhite;
                    position: absolute;
                    top: 50%;
                    left: 10%;
                    transform: translateY(-50%);
                    text-transform: uppercase;
                    text-shadow: 2px 2px 3px $mainColor;
                }

            }
        }
        
    }
</style>