export default {
    template : `
    <div class="border border-gray-500 rounded-sm p-4 m-4 max-w-full">
        <form @submit.prevent="add" class="flex items-center justify-between max-w-full">
            <input v-model="newAssigment" type="text" placeholder="New assigment...">
            <button type="submit" class="bg-blue-200/50 h-full w-full rounded-sm">add</button>
        </form>
    </div>
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