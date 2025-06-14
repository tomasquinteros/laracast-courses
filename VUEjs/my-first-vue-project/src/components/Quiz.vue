<template>
    <main>
        <QuizTitle/>
        <QuizButton />
    </main>
</template>

<script setup>
import QuizTitle from '@/components/QuizTitle.vue';
import { provide } from 'vue';
import QuizButton from '@/components/QuizButton.vue';

let props = defineProps(['quiz']);

function updateName () {
    props.quiz.name = "Changed";
}

provide('quiz', props.quiz);
provide('updateName', updateName)
</script>
