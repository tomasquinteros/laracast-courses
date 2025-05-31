export default {
    // @click="$emit('change', tag)" => Al usar la directiva @click, utilizo $emit para poder utilizar el valor de
    // ese evento dentro de mi componente padre. El primer param es el nombre del evento (con el que lo voy a llamar
    // dentro del padre) y el segundo param es el valor que retorno.
    template : `
        <!--        
         -- Metodo mas largo, capturando la propiedad currentTag y no el modelValue. Y retornando el valor del evento al padre
        <button  
            @click="$emit('change', tag)" 
            v-for="tag in this.tags"
            class="border rounded-sm border-white mx-1 px-2 py-1"
            :class="{
                'border-blue-400 text-blue-200' : tag === this.currentTag
            }"
        >-->
        <div class="flex flex-row items-center justify-start">        
            <button
                @click="$emit('update:currentTag', tag)" 
                v-for="tag in this.tags"
                class="border rounded-sm border-white my-2 mx-1 px-2 py-1"
                :class="{
                    'border-blue text-blue-200' : tag === this.currentTag
                }"
            >
              {{tag}}
            </button>
        </div>
    `,
    props: {
        initialTags : Array,
        currentTag : String
    },
    computed : {
        tags() {
            return ['all', ...new Set(this.initialTags) ];
        }
    },
}