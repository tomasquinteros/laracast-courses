<template>
    <main>
        <h1> {{ counter.count }} </h1>
        <button @click="counter.increment()">Increment ({{counter.remaining}}) Remaining</button>
        <!--
                <button @click="counter.decrement()">Decrement</button>
        -->
    </main>
</template>
<script setup>
//import { counter } from '@/stores/counter.js';
import { useCounterPinia } from '@/stores/useCounterPinia.js';

const counter = useCounterPinia();
</script>
