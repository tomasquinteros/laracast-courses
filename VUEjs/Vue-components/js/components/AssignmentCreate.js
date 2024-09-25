export default {
    template: `<form @submit.prevent="add" class="text-black">
                    <input v-model="newAssignment" type="text" required/>
                    <input type="submit" value="Add" class="bg-white border-l "/>
                </form>`,
    data() {
        return {
            newAssignment : '',
        }
    },
    methods : {
        add() {
            this.$emit('add', this.newAssignment); /*Emitimos datos al elemento padre, el primer argumento es el nombre del metodo, y el segundo el valor*/
            this.newAssignment = '';
        }
    }
}