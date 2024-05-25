import axios from 'axios';
import Swal from "sweetalert2";

window.Swal = Swal

window.axios = axios.create();

window.axios.defaults.headers.common['Accept'] = 'application/json';
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.axios.interceptors.response.use(
    function (response) {
        if (response.data.status) {
            Swal.fire({
                position: "top-end",
                icon: response.data.status,
                title: response.data.message,
                showConfirmButton: false,
                timer: 1500,
            });
            if (window.laravel.env === 'local' && window.laravel.debug === true) {
                console.warn(window.laravel)
                console.log(response)
            }
        }


        return response;
    },
    function (error) {
        if (error.response.data.status) {
            Swal.fire({
                position: "top-end",
                icon: error.response.data.status,
                title: error.response.data.message,
                showConfirmButton: false,
                timer: 1500,
            });
        }
        else if (window.laravel.env === 'local' && window.laravel.debug === true) {
            Swal.fire({
                position: "top-end",
                icon: 'error',
                title: error.code.replaceAll('_', ' '),
                text: error.message,
                showConfirmButton: false,
                timer: 1500,
            });
        }
        if (window.laravel.env === 'local' && window.laravel.debug === true) {
            console.warn(window.laravel)
            console.error(error)
        }
        return Promise.reject(error);
    }
);

