<script setup>
  import { useFlash } from "@/composables/useFlash";

  let { flash } = useFlash();

</script>

<template>
  <div class="contact">
    <h1>This is an contact page</h1>
    <button @click="flash('Yay!','Click in About page', 'info')">Click here!</button>
  </div>
</template>

<style>
@media (min-width: 1024px) {
  .contact {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}
</style>
