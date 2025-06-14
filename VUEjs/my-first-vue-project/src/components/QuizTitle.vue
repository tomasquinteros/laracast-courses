<template>
    <h1> {{ quiz.name }} </h1>
</template>

<script setup>
import { inject } from "vue";

let quiz = inject('quiz');

</script>


