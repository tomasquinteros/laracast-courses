export default {
    template : `
        <li>
            <label class="flex flex-row items-center justify-between">
                <p class="text-lg">{{ assignment.name }}</p>
                <input type="checkbox" v-model="assignment.completed"/>
            </label>
        </li>
    `,
    props : {
        assignment : Object,
    }
}