export default {
    template : `
        <form @submit.prevent="add">
        <input v-model="newAssigment" type="text" placeholder="New assigment...">
        <button type="submit">Add</button>
      </form>
    `,
    data () {
        return {
            newAssigment : '',
        }
    },
    methods: {
        add() {
            this.$emit('add', this.newAssigment);
            this.newAssigment = '';
        }
    }
}