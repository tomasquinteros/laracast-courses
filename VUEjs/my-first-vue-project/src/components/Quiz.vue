<template>
    <main>
        <QuizTitle/>
        <QuizButton />
        <ReactiveComponent />
    </main>
</template>

<script setup>
import QuizTitle from '@/components/QuizTitle.vue';
import { provide } from 'vue';
import QuizButton from '@/components/QuizButton.vue';
import ReactiveComponent from '@/components/ReactiveComponent.vue';

let props = defineProps({'quiz' : Object });

function updateName () {
    props.quiz.name = "Changed";
}

provide('quiz', {
    'quiz' : props.quiz,
    updateName
});
</script>
