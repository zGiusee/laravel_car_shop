import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach((button) => {
    button.addEventListener('click', function () {

        // Recupero l'id della car
        let car_id = button.getAttribute('data-car-id');

        // Recupero l'url per la richiesta
        let url = `${window.location.origin}/admin/cars/${car_id}`;

        // Reucpero la form
        let delete_form = document.getElementById('delete_form');

        // Applico alla action della form l'url creato
        delete_form.setAttribute('action', url);

    })

})