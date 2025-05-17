import AssignmentsList from "./AssignmentsList.js";

export default {
    components: {AssignmentsList},
    template : `
      <assignments-list :assignments="inProgressAssignments" :title="'In Progress'"></assignments-list>
      <assignments-list :assignments="completedAssignments" :title="'Completed'"></assignments-list>
    `,
    data () {
                return {
                    assignments : [
                        {'id' : 1, 'name' : 'Learn vue', 'completed' : false},
                        {'id' : 2, 'name' : 'Learn PHP', 'completed' : false},
                        {'id' : 3, 'name' : 'Learn Laravel', 'completed' : false }
                    ]
                }
            },
    computed: {
        completedAssignments () {
            return this.assignments.filter(assignment => assignment.completed)
        },
        inProgressAssignments () {
            return this.assignments.filter(assignment => ! assignment.completed)
        }
    }
}