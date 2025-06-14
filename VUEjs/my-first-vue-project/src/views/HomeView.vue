<!--
<script setup>
import TheWelcome from '../components/TheWelcome.vue';
import { useLocalStorage } from '@/composables/useLocalStorage.js';
import TabbableTextarea from '@/components/TabbableTextarea.vue';
import { ref } from 'vue';

let age = useLocalStorage('age');
let comment = ref('Hi there!');
</script>
-->

<template>
    <main>
        <!--        <TheWelcome/>
                <input type="text" v-model="age">
                <TabbableTextarea
                    style="width: 100%; height: 300px"
                    v-model="comment"
                />-->

        <Quiz :quiz="quiz"/>
    </main>
</template>
<script setup>
import Quiz from '@/components/Quiz.vue';
import { ref } from 'vue';
import QuizButton from '@/components/QuizButton.vue';

let quiz = ref({
    name: 'Hi there!',
    isQuiz: true,
});
</script>
