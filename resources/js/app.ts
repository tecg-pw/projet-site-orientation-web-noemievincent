import './bootstrap';
import {Projects} from "./Models/Projects";
import {Faq} from "./Models/Faq";
import {Alumnis} from "./Models/Alumnis";

window.addEventListener('load', init);

let siteUrl = 'http://projets-web.test/';

function init() {
    document.body.classList.remove('no-js');
    document.body.classList.add('js-only');

    handlePassword();
    updatePreviewOnInputChange();
    displayInputWhenRadioButtonIsChecked();

    // saveFavorite();

    if (document.body.id === 'projects_page') {
        new Projects(siteUrl);
    }

    if (document.body.id === 'alumnis_page') {
        new Alumnis(siteUrl);
    }

    if (document.body.id === 'faq_page') {
        new Faq(siteUrl);
    }
}

function handlePassword() {
    let inputs = document.getElementsByClassName('password') as HTMLCollection;
    let btns = document.getElementsByClassName('show-password') as HTMLCollection;
    let show = document.getElementsByClassName('show') as HTMLCollection;
    let hide = document.getElementsByClassName('hide') as HTMLCollection;

    if (btns.length > 0) {
        // @ts-ignore
        Array.from(btns).forEach((btn, index) => {
            btn.addEventListener('click', (e) => {
                let input = inputs[index] as HTMLInputElement;
                (input.type === 'password') ? input.type = 'text' : input.type = 'password';
                show[index].classList.toggle('hidden');
                hide[index].classList.toggle('hidden');
            });
        });
    }
}

function updatePreviewOnInputChange() {
    let input = document.getElementById('picture') as HTMLInputElement;
    let preview = document.getElementById('js-preview') as HTMLImageElement;

    if (input && preview) {
        preview.classList.remove('hidden');

        input.addEventListener('change', (e) => {
            let target = e.currentTarget as HTMLInputElement;
            if (target.files.length > 0) {
                preview.src = URL.createObjectURL(target.files[0]);
            }
        });
    }
}

function displayInputWhenRadioButtonIsChecked() {
    let btns = document.getElementsByClassName('reception-btn') as HTMLCollection;
    let inputs = document.getElementsByClassName('reception-input') as HTMLCollection;

    if (btns && inputs) {
        // @ts-ignore
        Array.from(btns).forEach((btn, index) => {
            btn.addEventListener('change', (e) => {
                // @ts-ignore
                Array.from(inputs).forEach((input, index) => {
                    input.classList.add('sr-only');
                    if (e.currentTarget.checked && e.currentTarget.dataset.input_id === input.id) {
                        input.classList.remove('sr-only');
                    }
                });
            });
        });
    }
}

function saveFavorite() {
    const state = {
        user_id: null,
        tuto_id: null,
    };

    let save_forms = document.getElementsByClassName('save_form') as HTMLCollection;

    let locale = window.location.pathname.split('/')[1];
    let url = `${siteUrl}${locale}/tutorials/save/ajax`;

    // @ts-ignore
    Array.from(save_forms).forEach((form) => {
        // @ts-ignore
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            let token = (e.currentTarget as HTMLFormElement)['_token'].value;
            state.user_id = (e.currentTarget as HTMLFormElement)['user_id'].value;
            state.tuto_id = (e.currentTarget as HTMLFormElement)['tuto_id'].value;

            // @ts-ignore
            fetch(url, {
                method: 'post',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                },
                credentials: "same-origin",
                body: JSON.stringify({
                    _token: token,
                    user_id: state.user_id,
                    tuto_id: state.tuto_id
                })
            }).then((response) => response.text())
                .then((data) => {
                    console.log(data);
                    form.innerHTML = data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        });
    });
}
