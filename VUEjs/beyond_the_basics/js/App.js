import Assignments from './Assignments.js'

export default {
    components : {
        Assignments
    },
    template: `
        <div class="grid place-items-center">        
            <div class="flex flex-col items-center justify-center max-w-[800px]">
                <assignments></assignments>
            </div>
        </div>
    `
}