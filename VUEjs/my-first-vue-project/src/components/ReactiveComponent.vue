<template>
    <h1> {{state.name}} </h1>
    <button @click="state.name = 'Changed'"> Click here</button>
</template>
<script setup>
    import { state } from '@/stores/stores.js';
</script>
