import './bootstrap';

window.addEventListener('load', init);

function init() {
    document.body.classList.remove('no-js');
    document.body.classList.add('js-only');
    handlePassword();
    updatePreviewOnInputChange();
    displayInputWhenRadioButtonIsChecked();
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
