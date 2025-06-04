import Assignment from "./Assignment.js";
import AssigmentTags from "./AssigmentTags.js";
import Panel from "./Panel.js";

export default {
    components: {Panel, AssigmentTags, Assignment},
    template: `
        <Panel>
            <div class="flex flex-row justify-between">  
                <h2 class="text-xl">
                    {{this.title}}
                    <span class="text-gray-200">{{ this.assignments.length }}</span>
                </h2>
                <button class="text-xl" v-show="canToggle" @click="$emit('toggle')">&times;</button>
            </div>
            <!-- 
                -- Lo que vemos aca es que le paso la propiedad currentTag donde le paso el valor del tag.
                -- Tambien, capturo el evento change que declare en el componente hijo y actualizo el valor de mi currentTag con el valor del evento.
                <assigment-tags 
                    @change="currentTag = $event" 
                    :initial-tags="this.assignments.map(a => a.tag)"
                    :current-tag="this.currentTag"
                />
            -->
            <!--
                En el caso de abajo lo que vemos es que nos podemos ahorrar el paso de setear el currentTag con su nuevo valor capturando el evento, 
                como nuestro currentTag es un estado reactivo, podemos setearlo automaticamente con el v-model
            -->
            <assigment-tags
                v-model:current-tag="this.currentTag"
                :initial-tags="this.assignments.map(a => a.tag)"
            />
            <ul>
                <assignment v-for="assignment in this.filteredAssignments" :key="assignment.id" :assignment="assignment"></assignment>
            </ul>
            <slot></slot>
            
            <!-- Con template y # le indicamos a Vue que slot debe utilizar, en este caso le indico que el slot es el que llamamos footer en el componente. -->
            <template #footer>Assignment List!</template>
        </Panel>
    `,
    // Data: La utilizamos para declarar estados reactivos.
    data () {
        return {
            'currentTag' : 'all',
        }
    },
    // Props: Pasa propiedades de un elemento padre a hijo.
    props : {
        'title' : String,
        'assignments' : Array,
        'canToggle' : {
            'type' : Boolean,
            'default' : false,
        }
    },
    // Computed: Declaramos propiedades derivadas de otras reactivas como Data o Props. 
    computed : {
        filteredAssignments () {
            if (this.currentTag === 'all') {
                return this.assignments;
            }
            return this.assignments.filter(assigment => assigment.tag === this.currentTag);
        }
    },
    // Methods: se utiliza para definir funciones que pueden ser llamadas desde el template o desde otros
    // metodos/propscomputadas. 
    methods : {
        
    }
}