<template>
  <div id="app">
    <transition-group name="fade">
      <div class="loader" v-if="loader" :key="1">
        <span class="spinner"></span>
      </div>
      <router-view v-else :key="2"></router-view>
    </transition-group>
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      loader: true
    }
  },
  mounted() {
    this.loader = false;
  }
}
</script>


<style lang="scss" scoped>
@import '~@scss/style.scss';

  .loader {
    width: 100%;
    height: 100vh;
   
    @include flex;

    .spinner {
      display: block;
      width: 80px;
      height: 80px;
      border: 10px solid $mainWhite;
      border-top-color: #606060; 
      border-bottom-color: #606060;
      border-left-color: #202020; 
      border-right-color: #202020;  
      border-radius: 50%;
      animation: spinner 1s infinite;
    }

    @keyframes spinner {
      0% {transform: rotate(0)}
      100% {transform: rotate(360deg)}
    }
  }

  .fade-leave-active {
    transition: opacity .5s ease-in-out;
  }

  .fade-enter-active {
    transition: opacity .5s .5s ease-in-out;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }
</style>
