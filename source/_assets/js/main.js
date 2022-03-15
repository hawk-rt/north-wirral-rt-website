import "bootstrap"

var santaRouteModal = document.getElementById('santaRouteModal')
santaRouteModal && santaRouteModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var image = button.getAttribute('data-bs-image')
    var title = button.getAttribute('data-bs-title')
    // Update the modal's content.
    var modalTitle = santaRouteModal.querySelector('.modal-title')
    var modalImage = santaRouteModal.querySelector('.modal-body img')

    modalTitle.textContent = title + ' Santa Sleigh Route'
    modalImage.alt = title + ' Santa Sleigh Route'
    modalImage.src = '/assets/images/santa-routes/' + image
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
