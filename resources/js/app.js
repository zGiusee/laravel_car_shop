import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const deleteButtons = document.querySelectorAll(".delete_button");

deleteButtons.forEach((button) => {
    button.addEventListener("click", function () {
        // Recupero l'id della car
        let id = button.getAttribute("data-id");
        let name = button.getAttribute("data-name");
        let type = button.getAttribute("data-type");

        // Recupero l'url per la richiesta
        let url = `${window.location.origin}/admin/${type}/${id}`;

        let space = document.getElementById("space");

        space.textContent = id;

        // Reucpero la form
        let delete_form = document.getElementById("delete_form");

        // Applico alla action della form l'url creato
        delete_form.setAttribute("action", url);
    });
});
