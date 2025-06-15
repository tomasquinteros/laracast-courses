<template>
    <button @click="updateName()"> {{quiz.name}} </button>
</template>
<script setup>
    import { inject } from "vue";

    let {quiz, updateName} = inject('quiz');
</script>

