import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteButtons = document.querySelectorAll('.delete_button');

deleteButtons.forEach((button) => {
    button.addEventListener('click', function () {

        // Recupero l'id della car
        const car_id = button.getAttribute('data-car-id');

        // Recupero l'url per la richiesta
        let url = `${window.location.origin}/admin/cars/${car_id}`;

        // Reucpero la form
        let delete_form = document.getElementById('delete_form');

        const car_id_space = document.getElementById('car_id_space');

        car_id_space.textContent = car_id;

        // Applico alla action della form l'url creato
        delete_form.setAttribute('action', url);

    })

})