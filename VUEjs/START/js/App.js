import buttonApp from "./components/ButtonApp.js";
export default {
    components: {
        'button-component' : buttonApp,
    },
    data () {
        return {
            greeting: 'Hello!!'
        }
    }
};