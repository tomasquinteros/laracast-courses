import AssignmentsList from "./AssignmentsList.js";

export default {
    components: {
        'assignments-list' : AssignmentsList,
    },
    template: `
        <section class="space-y-6">
                <assignments-list :assignments="filters.inProgress" title="In Progress"></assignments-list>
                <assignments-list :assignments="filters.completed" title="Completed"></assignments-list>
        </section>
        
    `,
    data() {
        return {
            assignments: [
                {id: 1, name: 'Working to programming', complete: false},
                {id: 2, name: 'Working to english', complete: false},
                {id: 3, name: 'Wash my teeth', complete: false}
            ]
        }
    },
    computed: {
        filters () {
            return {
                inProgress : this.assignments.filter(assignment => ! assignment.complete),
                completed: this.assignments.filter(assignment => assignment.complete),
            };
        },
    }
}