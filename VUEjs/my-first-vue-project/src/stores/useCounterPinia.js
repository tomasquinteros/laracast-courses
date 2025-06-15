// Pinia es una libreria que se utiliza para generar estados globales en Vue3, nos sirve para el
// debugging.

import { defineStore } from 'pinia';

export let useCounterPinia = defineStore('counter', {
    // Data (State)
    state () {
        return {
            count: 0,
        };
    }
    ,

    // Methods (Actions)
    actions: {
        increment () {
            if (this.count < 10) this.count++;
        }
    },
    // Computed (More methods)
    getters: {
        remaining: (state) => 10 - state.count,
    }
});
