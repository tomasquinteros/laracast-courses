import AssignmentsList from "./AssignmentsList.js";
import AssignmentCreate from "./AssignmentCreate.js";
export default {
    components: {AssignmentCreate, AssignmentsList},
    template : `
    <div class="max-w-full flex flex-row items-start">
        <assignments-list v-if="inProgressAssignments.length > 0" :assignments="inProgressAssignments" :title="'In Progress'">
            <assignment-create @add="add"></assignment-create>
        </assignments-list>
        <div v-if="showCompleted">
            <assignments-list 
                v-if="completedAssignments.length > 0" 
                :assignments="completedAssignments" 
                :title="'Completed'"
                :can-toggle="true"
                @toggle="showCompleted = !showCompleted"
            />
        </div>
    </div>
    `,
    data() {
        return {
            assignments: [],
            showCompleted : true,
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
    // El created hace referencia al ciclo de vida de la aplicacion. El ciclo de vida de una aplicacion es el siguiente:
    // - created => Sirve para inicializar los datos, acceder a APIs, metodos, etc.
    // - mounted => Ya se puede manipular el dom
    // - unmounted => Se usa para hacer algo antes que el componente se desmonte. (Ya sea esconderse, eliminarse del
    // DOM)
    
    created () {
        fetch('http://localhost:3001/assignments').then(response => response.json()).then(data => this.assignments = data)
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