import { reactive } from 'vue';

// En nuestra constante reactiva ademas de tener el estado podemos tener acciones.
export const counter = reactive({
    // State
    count: 0,
    // Actions
    increment () {
        if (this.count >= 10) return;
        this.count++;

    },
    decrement () {
        if (this.count === 0) return;
        this.count--
    }
});
