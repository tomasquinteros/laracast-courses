<script>
  import flash from '@/mixins/flash';

  export default {
    mixins : [flash],
  }

</script>

<template>
  <div class="about">
    <h1>This is an about page</h1>
    <button @click="flash('Click in About page')">Click here!</button>
  </div>
</template>

<style>
@media (min-width: 1024px) {
  .about {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}
</style>
