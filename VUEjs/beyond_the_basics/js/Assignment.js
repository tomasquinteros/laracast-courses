export default {
    template : `
        <li>
            <label class="flex flex-row items-center justify-between">
                <span class="text-lg">{{ assignment.name }}</span>
                <input type="checkbox" v-model="assignment.completed"/>
            </label>
        </li>
    `,
    props : {
        assignment : Object,
    }
}