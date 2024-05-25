import './bootstrap';
import 'flowbite';
import Swal from "sweetalert2";

const swalMessage = (type, title) => {
    Swal.fire({
        position: "top-end",
        icon: type,
        title: title,
        showConfirmButton: false,
        timer: 1500,
    });

}
let sendMessage = () => {
    swalMessage('error', 'Please verify you are not robot')
    return false
}
window.addEventListener('load', () => {
    const formContact = document.getElementById('form-contact')
    formContact.addEventListener('submit', (event) => {
        event.preventDefault()
        if (!sendMessage()) return
        Swal.fire({
            title: "Please wait ...",
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
            },
            allowOutsideClick: false
        });
        const formData = new FormData(formContact);
        axios({
            method: formContact.getAttribute('method'),
            url: formContact.getAttribute('action'),
            data: formData,
        }).then(response => {
            formContact.reset()
        }).catch(error => {
            // Handle error
        }).finally(() => {

        });
    })
})
window.captchaCallback = () => {
    sendMessage = () => {
        sendMessage = () => {
            swalMessage('error', 'Please verify you are not robot')
            return false
        }
        return true
    }
}

