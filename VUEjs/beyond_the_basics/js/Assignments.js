import AssignmentsList from "./AssignmentsList.js";
import AssignmentCreate from "./AssignmentCreate.js";
export default {
    components: {AssignmentCreate, AssignmentsList},
    template : `
      <assignments-list v-if="inProgressAssignments.length > 0" :assignments="inProgressAssignments" :title="'In Progress'"></assignments-list>
      <assignments-list v-if="completedAssignments.length > 0" :assignments="completedAssignments" :title="'Completed'"></assignments-list>
      <assignment-create @add="add"></assignment-create>
    `,
    data () {
                return {
                    assignments : [
                        {'id' : 1, 'name' : 'Learn vue', 'completed' : false, 'tag' : 'Frontend'},
                        {'id' : 2, 'name' : 'Learn PHP', 'completed' : false, 'tag' : 'Backend'},
                        {'id' : 3, 'name' : 'Learn Laravel', 'completed' : false, 'tag' : 'Backend' }
                    ],
                }
            },
    computed: {
        completedAssignments () {
            return this.assignments.filter(assignment => assignment.completed)
        },
        inProgressAssignments () {
            return this.assignments.filter(assignment => ! assignment.completed)
        }
    },

    methods : {
        add (value) {
            if (value === '') {
                alert('The assigment is empty.');
            } else {
                this.assignments.push(
                        {'id' : this.assignments.length + 1, 'name' : value, 'completed' : false},
                );
            }
        }
    }
}