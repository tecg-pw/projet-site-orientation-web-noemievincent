export class Faq {
    private readonly siteUrl: string;

    constructor(siteUrl: string) {
        this.siteUrl = siteUrl;

        const state = {
            page: 1,
            search_term: '',
        };

        this.handleSearch(state);
    }

    private handleSearch(state: { search_term: string; page: number; }) {
        document.getElementById('search_form').addEventListener('submit', (e) => {
            e.preventDefault();
        });

        let search_input = document.getElementById('search_term') as HTMLInputElement;
        // search_input.value = '';

        search_input.addEventListener('input', (e) => {
            state.search_term = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;

            this.makeRequest(state);
        });
    }

    private handlePagination(state) {
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
    private makeRequest(state) {
        let locale = window.location.pathname.split('/')[1];
        let category = window.location.pathname.split('/')[3];

        let url = `${this.siteUrl}${locale}/faq/${category}/ajax?` + new URLSearchParams(state);

        history.pushState(state, '', url.replace('/ajax', ''));

        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateContainer(data, state));
    }
    private updateContainer(data: string, state) {
        document.getElementById('container').innerHTML = data;

        let match = new RegExp(state.search_term, 'ig');
        let titles = document.getElementsByClassName('title') as HTMLCollection;
        let bodies = document.getElementsByClassName('body') as HTMLCollection;

        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.replace(match, `<mark>${state.search_term}</mark>`);
        }

        // @ts-ignore
        for (const body of bodies) {
            body.innerHTML = body.textContent.replace(match, `<mark>${state.search_term}</mark>`);
        }

        this.handlePagination(state);
    }

}
