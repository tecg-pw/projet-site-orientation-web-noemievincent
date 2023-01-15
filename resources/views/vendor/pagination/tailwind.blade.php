@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}"
         class="flex items-center justify-between text-orange font-body font-light text-xl">
        <div class="flex justify-between flex-1 sm:hidden">
            <div class="flex gap-3">
                {{-- Skip Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.skip-previous') }}">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 cursor-default rounded-l-md leading-5"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                                      <g id="skip-previous" transform="translate(-69.999 -9)" class="fill-gray-400">
                                        <path d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(70 9.001)" fill-rule="evenodd"/>
                                        <path d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(77 9.001)" fill-rule="evenodd"/>
                                      </g>
                                    </svg>
                                </span>
                            </span>
                @else
                    <a href="{{ $paginator->url(1) }}" rel="prev"
                       class="relative inline-flex items-center transition ease-in-out duration-150 group/skip-previous"
                       aria-label="{{ __('pagination.skip-previous') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                            <g id="skip-previous" transform="translate(-69.999 -9)" class="fill-orange group-hover/skip-previous:fill-orange-dark transition ease-in-out duration-150">
                                <path d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(70 9.001)" fill-rule="evenodd"/>
                                <path d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(77 9.001)" fill-rule="evenodd"/>
                            </g>
                        </svg>
                    </a>
                @endif

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 cursor-default rounded-l-md leading-5"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20"
                                         class="fill-gray-400">
                                        <path id="previous"
                                              d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </span>
                            </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       class="relative inline-flex items-center px-2 py-2 rounded-l-md leading-5 active transition ease-in-out duration-150 group/previous"
                       aria-label="{{ __('pagination.previous') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" class="fill-orange group-hover/previous:fill-orange-dark transition ease-in-out duration-150">
                            <path id="previous" d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                @endif
            </div>

            <div class="flex gap-3">
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                       class="relative inline-flex items-center px-2 py-2 rounded-l-md leading-5 active transition ease-in-out duration-150 group/next"
                       aria-label="{{ __('pagination.next') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" class="fill-orange group-hover/next:fill-orange-dark transition ease-in-out duration-150">
                            <path id="next" d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 cursor-default rounded-l-md leading-5"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20"
                                         class="fill-gray-400">
                                        <path id="next"
                                              d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </span>
                            </span>
                @endif

                {{-- Skip Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->url($paginator->lastPage()) }}" rel="next"
                       class="relative inline-flex items-center transition ease-in-out duration-150 group/skip-next"
                       aria-label="{{ __('pagination.skip-next') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                            <g id="skip-next" transform="translate(87 0)" class="fill-orange group-hover/skip-next:fill-orange-dark transition ease-in-out duration-150">
                                <path d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(-79.999 0.001)" fill-rule="evenodd"/>
                                <path d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(-86.999 0.001)" fill-rule="evenodd"/>
                            </g>
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.skip-next') }}">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 cursor-default rounded-l-md leading-5"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                                      <g id="skip-next" transform="translate(87 0)" class="fill-gray-400">
                                        <path d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(-79.999 0.001)" fill-rule="evenodd"/>
                                        <path d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(-86.999 0.001)" fill-rule="evenodd"/>
                                      </g>
                                    </svg>
                                </span>
                            </span>
                @endif
            </div>
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-center sm:gap-6">
            <div class="flex gap-3">
                {{-- Skip Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.skip-previous') }}">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 cursor-default rounded-l-md leading-5"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                                      <g id="skip-previous" transform="translate(-69.999 -9)" class="fill-gray-400">
                                        <path d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(70 9.001)" fill-rule="evenodd"/>
                                        <path d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(77 9.001)" fill-rule="evenodd"/>
                                      </g>
                                    </svg>
                                </span>
                            </span>
                @else
                    <a href="{{ $paginator->url(1) }}" rel="prev"
                       class="relative inline-flex items-center transition ease-in-out duration-150 group/skip-previous"
                       aria-label="{{ __('pagination.skip-previous') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                            <g id="skip-previous" transform="translate(-69.999 -9)" class="fill-orange group-hover/skip-previous:fill-orange-dark transition ease-in-out duration-150">
                                <path d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(70 9.001)" fill-rule="evenodd"/>
                                <path d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(77 9.001)" fill-rule="evenodd"/>
                            </g>
                        </svg>
                    </a>
                @endif

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 cursor-default rounded-l-md leading-5"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20"
                                         class="fill-gray-400">
                                        <path id="previous"
                                              d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </span>
                            </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       class="relative inline-flex items-center px-2 py-2 rounded-l-md leading-5 active transition ease-in-out duration-150 group/previous"
                       aria-label="{{ __('pagination.previous') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" class="fill-orange group-hover/previous:fill-orange-dark transition ease-in-out duration-150">
                            <path id="previous" d="M9.666,19.707a.9.9,0,0,1-1.331,0L.551,11.443a2.087,2.087,0,0,1,0-2.827L8.392.292A.9.9,0,0,1,9.713.282,1.023,1.023,0,0,1,10,.992a1.026,1.026,0,0,1-.276.715L2.547,9.323a1.043,1.043,0,0,0,0,1.414l7.119,7.557a1.042,1.042,0,0,1,0,1.413" transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                @endif
            </div>
            <div>
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span aria-disabled="true">
                                <span
                                    class="relative inline-flex items-center px-4 py-2 -ml-px cursor-default leading-5">{{ $element }}</span>
                            </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 -ml-px cursor-default leading-5 font-semibold">{{ $page }}</span>
                                    </span>
                            @else
                                <a href="{{ $url }}"
                                   class="relative inline-flex items-center px-4 py-2 -ml-px leading-5 hover:bg-orange-light/30 focus:bg-orange-light/30 active:bg-orange-light/30 rounded-full hover transition ease-in-out duration-150"
                                   aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
            <div class="flex gap-3">
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                       class="relative inline-flex items-center px-2 py-2 rounded-l-md leading-5 active transition ease-in-out duration-150 group/next"
                       aria-label="{{ __('pagination.next') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20" class="fill-orange group-hover/next:fill-orange-dark transition ease-in-out duration-150">
                            <path id="next" d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 cursor-default rounded-l-md leading-5"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 10 20"
                                         class="fill-gray-400">
                                        <path id="next"
                                              d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(0.001 0.001)" fill-rule="evenodd"/>
                                    </svg>
                                </span>
                            </span>
                @endif

                {{-- Skip Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->url($paginator->lastPage()) }}" rel="next"
                       class="relative inline-flex items-center transition ease-in-out duration-150 group/skip-next"
                       aria-label="{{ __('pagination.skip-next') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                            <g id="skip-next" transform="translate(87 0)" class="fill-orange group-hover/skip-next:fill-orange-dark transition ease-in-out duration-150">
                                <path d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(-79.999 0.001)" fill-rule="evenodd"/>
                                <path d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(-86.999 0.001)" fill-rule="evenodd"/>
                            </g>
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.skip-next') }}">
                                <span
                                    class="relative inline-flex items-center px-2 py-2 cursor-default rounded-l-md leading-5"
                                    aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20">
                                      <g id="skip-next" transform="translate(87 0)" class="fill-gray-400">
                                        <path d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(-79.999 0.001)" fill-rule="evenodd"/>
                                        <path d="M.333,19.707a.9.9,0,0,0,1.331,0l7.784-8.264a2.087,2.087,0,0,0,0-2.827L1.607.292A.9.9,0,0,0,.285.282,1.023,1.023,0,0,0,0,.992a1.026,1.026,0,0,0,.276.715L7.452,9.323a1.043,1.043,0,0,1,0,1.414L.333,18.294a1.042,1.042,0,0,0,0,1.413" transform="translate(-86.999 0.001)" fill-rule="evenodd"/>
                                      </g>
                                    </svg>
                                </span>
                            </span>
                @endif
            </div>
        </div>
    </nav>
@endif
