import Assignment from "./Assignment.js";

export default {
    components: {Assignment},
    template: `
        <h2 class="text-xl mt-9">{{this.title}}</h2>
        <ul>
            <assignment v-for="assignment in this.assignments" :key="assignment.id" :assignment="assignment"></assignment>
        </ul>
    `,
    props : {
        'title' : String,
        'assignments' : Array
    }

}