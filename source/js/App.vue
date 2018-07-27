<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<style lang="scss">
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-size: 16px;
  color: #424242;
}

@mixin flex($flow: 'row nowrap', $justify: 'center', $align: 'center') {
  display: flex;
  flex-flow: $flow;
  justify-content: $justify;
  align-items: $align;
}
</style>