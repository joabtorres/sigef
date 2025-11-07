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
    dateFormat: "Y-m-d",
});

(() => {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
