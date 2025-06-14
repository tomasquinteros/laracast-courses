<template>
    <button @click="updateQuiz()"> {{quiz.name}} </button>
</template>
<script setup>
    import { inject } from "vue";

    let quiz = inject('quiz');
    let updateQuiz = inject('updateName');
</script>

