import './bootstrap';
//importanto jquery
import jQuery from 'jquery';
window.$ = jQuery;
// importando select2
import select2 from 'select2';
select2();

$(".select2").select2({
    theme: "bootstrap-5",
    containerCssClass: "select2--small",
    dropdownCssClass: "select2--small",
});

// calendario
import flatpickr from "flatpickr";
flatpickr(".date-input", {
    enableTime: true,
    dateFormat: "d-m-Y",
});
