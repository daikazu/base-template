<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<div
    x-data="{
        value: ['02/01/2022', '02/05/2022'],
        init() {
            $(this.$refs.picker).daterangepicker(
                {
                    startDate: this.value[0],
                    endDate: this.value[1],
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [
                            moment().subtract(1, 'days'),
                            moment().subtract(1, 'days'),
                        ],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [
                            moment().startOf('month'),
                            moment().endOf('month'),
                        ],
                        'Last Month': [
                            moment().subtract(1, 'month').startOf('month'),
                            moment().subtract(1, 'month').endOf('month'),
                        ],
                    },
                },
                (start, end) => {
                    this.value[0] = start.format('MM/DD/YYYY')
                    this.value[1] = end.format('MM/DD/YYYY')
                },
            )

            this.$watch('value', () => {
                $(this.$refs.picker)
                    .data('daterangepicker')
                    .setStartDate(this.value[0])
                $(this.$refs.picker)
                    .data('daterangepicker')
                    .setEndDate(this.value[1])
            })
        },
    }"
    class="w-full max-w-sm"
>
    <div class="mb-2 font-bold">Date Range:</div>

    <div class="relative">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 text-gray-900"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                />
            </svg>
        </div>

        <input type="text" x-ref="picker" class="w-full rounded-md border border-gray-200 py-2.5 pl-12 pr-3" />
    </div>
</div>
