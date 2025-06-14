<script setup>

// De esta manera definimos los properties que le pasamos al componente de nuestro componente padre.
defineProps({
    modelValue: String,
});

// De esta manera definimos los emits que le mandamos a nuestro componente padre para que pueda modificar su valor.
let emit = defineEmits(['update:modelValue']);
function pressTabKey (e) {
    let textarea = e.target;
    let val = textarea.value, start = textarea.selectionStart, end = textarea.selectionEnd;
    textarea.value = val.substring(0, start) + '\t' + val.substring(end);
    textarea.selectionStart = textarea.selectionEnd = start + 1;
    e.preventDefault();
}

</script>

<template>
    <textarea
        @keydown.tab.prevent="pressTabKey"
        @keyup="emit('update:modelValue', $event.target.value)"
        :value="modelValue"
    >
    </textarea>
</template>
