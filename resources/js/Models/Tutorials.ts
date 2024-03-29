export class Tutorials {
    private readonly siteUrl: string;
    private readonly onUserProfile: boolean;

    constructor(siteUrl: string, onUserProfile: boolean = false) {
        this.siteUrl = siteUrl;
        this.onUserProfile = onUserProfile;

        const state = {
            page: 1,
            search_term: '',
            language: 'all',
        };

        this.handleSearch(state);
        this.handleFilters(state);
    }

    private handleFilters(state: { search_term: string; page: number; language: string }) {
        document.getElementById('sort_btn').classList.add('hidden');

        let sort_by_language = document.getElementById('language') as HTMLInputElement;
        // sort_by_language.value = 'all';

        sort_by_language.addEventListener('change', (e) => {
            state.language = (e.currentTarget as HTMLSelectElement).value;
            state.page = 1;

            this.makeRequest(state);
        });
    }

    private handleSearch(state: { search_term: string; page: number; language: string }) {
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

        let url = `${this.siteUrl}${locale}/tutorials/ajax?` + new URLSearchParams(state);

        if (this.onUserProfile) {
            let userSlug = window.location.pathname.split('/')[3];
            url = `${this.siteUrl}${locale}/users/${userSlug}/ajax?` + new URLSearchParams(state);
        }

        history.pushState(state, '', url.replace('/ajax', ''));

        fetch(url)
            .then((response) => response.text())
            .then((data) => this.updateContainer(data, state));
    }

    private updateContainer(data: string, state) {
        document.getElementById('container').innerHTML = data;

        let match = new RegExp(state.search_term, 'ig');
        let titles = document.getElementsByClassName('title') as HTMLCollection;
        let descriptions = document.getElementsByClassName('description') as HTMLCollection;

        // @ts-ignore
        for (const title of titles) {
            title.innerHTML = title.textContent.replace(match, `<mark>${state.search_term}</mark>`);
        }

        // @ts-ignore
        for (const description of descriptions) {
            description.innerHTML = description.textContent.replace(match, `<mark>${state.search_term}</mark>`);
        }

        this.handlePagination(state);
    }

}
