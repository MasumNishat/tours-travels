import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';
import Swal from "sweetalert2";

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

window.Alpine = Alpine;

Alpine.start();




window.addEventListener('load', () => {
    const formCreate = document.getElementById('form-create')
    formCreate.addEventListener('submit', (event) => {
        axiosCall(formCreate, event)
    })
})

window.axiosCall = (form, event) => {
    const formData = new FormData(form);
    event.preventDefault()
    wait();
    axios({
        method: form.getAttribute('method'),
        url: form.getAttribute('action'),
        data: formData,
    }).then(response => {
        window.projects.add(response.data.data)
        form.reset()
    }).catch(error => {
        // Handle error
    }).finally(() => {

    });
}

window.wait = () => {
    Swal.fire({
        title: "Please wait ...",
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading();
        },
        allowOutsideClick: false
    });
}

window.toast = (icon, title, target) => {
    Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        target: target? target : document.body,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    }).fire({
        icon: icon,
        title: title
    })
}
