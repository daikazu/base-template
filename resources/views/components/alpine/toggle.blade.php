<!-- Toggle -->
<div x-data="{ value: false }" class="flex items-center justify-center" x-id="['toggle-label']">
    <input type="hidden" name="sendNotifications" :value="value" />

    <!-- Label -->
    <label
        @click="$refs.toggle.click(); $refs.toggle.focus()"
        :id="$id('toggle-label')"
        class="font-medium text-gray-900"
    >
        Send notifications
    </label>

    <!-- Button -->
    <button
        x-ref="toggle"
        @click="value = ! value"
        type="button"
        role="switch"
        :aria-checked="value"
        :aria-labelledby="$id('toggle-label')"
        :class="value ? 'bg-slate-400' : 'bg-slate-300'"
        class="relative ml-4 inline-flex w-14 rounded-full py-1 transition"
    >
        <span
            :class="value ? 'translate-x-7' : 'translate-x-1'"
            class="h-6 w-6 rounded-full bg-white shadow-md transition"
            aria-hidden="true"
        ></span>
    </button>
</div>
