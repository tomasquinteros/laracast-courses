<script setup>
import TheWelcome from '../components/TheWelcome.vue'
import { useLocalStorage } from "@/composables/useLocalStorage.js";

let age = useLocalStorage('age');


</script>

<template>
  <main>
    <TheWelcome />
    <input type="text" v-model="age" >
  </main>
</template>
