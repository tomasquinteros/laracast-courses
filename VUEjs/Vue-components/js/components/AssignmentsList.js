import AssignmentItem from "./AssignmentItem.js";

export default {
    components : {'assignment-item' : AssignmentItem},
    template: `
    <section v-show="assignments.length">
        <h1 class="text-2xl font-bold">{{title}}</h1>
        <ul>
            <assignment-item v-for="assignment in assignments" :key="assignment.id" :item="assignment"></assignment-item>
        </ul>
    </section>
    `,
    props : {
        assignments : {type: Array},
        title : {
            type: String,
        }
    }
}