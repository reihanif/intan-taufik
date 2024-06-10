import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';
import DataTable from 'datatables.net-dt';

window.Alpine = Alpine;
Alpine.start();

let table = new DataTable("#guests-table", {
    responsive: true,
    layout: {
        topStart: {},
        topEnd: {},
        bottomStart: {
            pageLength: {
                text: "Rows per page_MENU_",
            },
            info: {
                text: '<span class="font-semibold dark:text-white"> _START_ - _END_ </span> of <span class="font-semibold dark:text-white">_TOTAL_</span>',
            },
        },
    },
    oLanguage: {
        sEmptyTable: '<object class="mx-auto w-full sm:h-64 sm:w-64 sm:p-0" data="assets/illustrations/no-data-animate.svg"></object>' +
            '<div class="mb-8">No data found</div>',
    },
    language: {
        infoEmpty: '<span class="font-semibold dark:text-white"> 0 - 0 </span> of <span class="font-semibold dark:text-white">0</span>',
    },
});
document
    .getElementById("table-search-departments")
    .addEventListener("keyup", function() {
        table.columns(1).search(this.value).draw();
    });
