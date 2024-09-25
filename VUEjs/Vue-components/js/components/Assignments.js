import AssignmentsList from "./AssignmentsList.js";
import AssignmentCreate from "./AssignmentCreate.js";
export default {
    components: {
        'assignments-list' : AssignmentsList,
        'assignment-create' : AssignmentCreate,
    },
    template: `
        <section class="space-y-6">
                <assignments-list :assignments="filters.inProgress" title="In Progress"></assignments-list>
                <assignments-list :assignments="filters.completed" title="Completed"></assignments-list>
                <assignment-create @add="add" /> <!--Con el metodo @add emitimos datos de hijo al padre este metodo @add debe concordar con el que le pusimos al hijo y el argumento es nuestra funcion donde lo carga-->
        </section>
        
    `,
    data() {
        return {
            assignments: [
                {id: 1, name: 'Working to programming', complete: false},
                {id: 2, name: 'Working to english', complete: false},
                {id: 3, name: 'Wash my teeth', complete: false}
            ],
        }
    },
    computed: {
        filters () {
            return {
                inProgress : this.assignments.filter(assignment => ! assignment.complete),
                completed: this.assignments.filter(assignment => assignment.complete),
            };
        },
    },
    methods: {
        add (name) {
            if ( (name.trim()).length > 0) {
                this.assignments.push({
                    id: this.assignments.length + 1,
                    name: name,
                    complete: false,
                });
            }
        }
    }
}