import './bootstrap';

window.addEventListener('load', init);

function init() {
    handlePassword();
}

function handlePassword() {
    let input = document.getElementById('password') as HTMLInputElement;
    let btn = document.getElementById('show-password');
    let show = document.getElementById('show');
    let hide = document.getElementById('hide');

    if (btn) {
        btn.addEventListener('click', (e) => {
            (input.type === 'password') ? input.type = 'text' : input.type = 'password';
            show.classList.toggle('hidden');
            hide.classList.toggle('hidden');
        });
    }
}
