export class Projects {
    private readonly siteUrl: string;
    constructor(siteUrl: string) {
        this.siteUrl = siteUrl;

        const state = {
            page: 1,
            search_term: '',
        };

        let search_input = document.getElementById('search_term') as HTMLInputElement;
        // search_input.value = '';
        search_input.addEventListener('input', (e) => {
            state.search_term = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;

            this.makeRequest(state);
        });
    }

    makeRequest(state) {
        let locale = window.location.pathname.split('/')[1];

        let url = `${this.siteUrl}${locale}/projects/ajax?` + new URLSearchParams(state);

        history.pushState(state, '', url.replace('/ajax', ''));

        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateContainer(data, state));
    }

    updateContainer(data: string, state) {
        document.getElementById('container').innerHTML = data;

        this.handlepagination(state);
    }

    handlepagination(state) {
        let pagination = document.querySelectorAll('#pagination a') as NodeList;

        // @ts-ignore
        Array.from(pagination).forEach((link, index) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                if (e.currentTarget.classList.contains('previous') || e.currentTarget.classList.contains('next')) {
                    state.page = state.page + parseInt(e.currentTarget.dataset.page);
                } else if (e.currentTarget.classList.contains('skip-previous') || e.currentTarget.classList.contains('skip-next')) {
                    state.page = parseInt(e.currentTarget.dataset.page);
                } else {
                    state.page = parseInt(e.currentTarget.dataset.page);
                }

                this.makeRequest(state);
            });
        });
    }
}
