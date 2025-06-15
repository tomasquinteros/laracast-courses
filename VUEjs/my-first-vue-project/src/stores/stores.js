import { reactive } from "vue";
export const state = reactive({
    name : 'My first quiz',
    questions : [],
});

// Diferencia entre utilizar reactive y ref:
// Reactive: Lo utilizamos para crear Objectos reactivos, a la hora de modificar alguna
// propiedad solamente debemos ingresar con el nombre de la propiedad.
// Ref: Lo utilizamos para datos primitivos reactivos: string, number, boolean, object (Es mejor
// utilizar Reactive que ref). Para cambiar el valor de la propiedad tenemos que utilizar
// name.value
