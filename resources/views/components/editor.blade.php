<div class="my-20 max-w-xl mx-auto">

    <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="px-3 py-2 border-b border-gray-200 dark:border-gray-600">
            <div class="flex flex-wrap items-center">
                <div class="flex items-center space-x-1 rtl:space-x-reverse flex-wrap">
                    <button id="toggleLeftAlignButton" type="button" data-tooltip-target="tooltip-left-align" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6h8m-8 4h12M6 14h8m-8 4h12"/>
                        </svg>
                        <span class="sr-only">Align left</span>
                    </button>
                    <div id="tooltip-left-align" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Align left
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="toggleCenterAlignButton" type="button" data-tooltip-target="tooltip-center-align" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h8M6 10h12M8 14h8M6 18h12"/>
                        </svg>
                        <span class="sr-only">Align center</span>
                    </button>
                    <div id="tooltip-center-align" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Align center
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="toggleRightAlignButton" type="button" data-tooltip-target="tooltip-right-align" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6h-8m8 4H6m12 4h-8m8 4H6"/>
                        </svg>
                        <span class="sr-only">Align right</span>
                    </button>
                    <div id="tooltip-right-align" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Align right
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <button id="toggleJustifyButton" type="button" data-tooltip-target="tooltip-justify" class="p-1.5 text-gray-500 rounded-sm cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6H6m12 4H6m12 4H6m12 4H6"/>
                        </svg>
                        <span class="sr-only">Justify</span>
                    </button>
                    <div id="tooltip-justify" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                        Justify text
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
            <label for="wysiwyg-alignment-example" class="sr-only">Publish post</label>
            <div id="wysiwyg-alignment-example" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"></div>
        </div>
    </div>

</div>


@push('js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script type="importmap">
        {
            "imports": {
                "https://esm.sh/v135/prosemirror-model@1.22.3/es2022/prosemirror-model.mjs": "https://esm.sh/v135/prosemirror-model@1.19.3/es2022/prosemirror-model.mjs",
                "https://esm.sh/v135/prosemirror-model@1.22.1/es2022/prosemirror-model.mjs": "https://esm.sh/v135/prosemirror-model@1.19.3/es2022/prosemirror-model.mjs"
            }
        }
    </script>
    <script type="module">

        import { Editor } from 'https://esm.sh/@tiptap/core@2.6.6';
        import StarterKit from 'https://esm.sh/@tiptap/starter-kit@2.6.6';
        import Highlight from 'https://esm.sh/@tiptap/extension-highlight@2.6.6';
        import Underline from 'https://esm.sh/@tiptap/extension-underline@2.6.6';
        import Link from 'https://esm.sh/@tiptap/extension-link@2.6.6';
        import TextAlign from 'https://esm.sh/@tiptap/extension-text-align@2.6.6';
        import Image from 'https://esm.sh/@tiptap/extension-image@2.6.6';
        import YouTube from 'https://esm.sh/@tiptap/extension-youtube@2.6.6';

        window.addEventListener('load', function() {
            if (document.getElementById("wysiwyg-alignment-example")) {

                // tip tap editor setup
                const editor = new Editor({
                    element: document.querySelector('#wysiwyg-alignment-example'),
                    extensions: [
                        StarterKit,
                        Highlight,
                        Underline,
                        Link.configure({
                            openOnClick: false,
                            autolink: true,
                            defaultProtocol: 'https',
                        }),
                        TextAlign.configure({
                            types: ['heading', 'paragraph'],
                        }),
                        Image,
                        YouTube
                    ],
                    content: '<p>Flowbite is an <strong>open-source library of UI components</strong> based on the utility-first Tailwind CSS framework featuring dark mode support, a Figma design system, and more.</p><p>It includes all of the commonly used components that a website requires, such as buttons, dropdowns, navigation bars, modals, datepickers, advanced charts and the list goes on.</p><p>Here is an example of a button component:</p><code>&#x3C;button type=&#x22;button&#x22; class=&#x22;text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800&#x22;&#x3E;Default&#x3C;/button&#x3E;</code><p>Learn more about all components from the <a href="https://flowbite.com/docs/getting-started/introduction/">Flowbite Docs</a>.</p>',
                    editorProps: {
                        attributes: {
                            class: 'format lg:format-lg dark:format-invert focus:outline-none format-blue max-w-none',
                        },
                    }
                });

                // set up custom event listeners for the buttons
                document.getElementById('toggleLeftAlignButton').addEventListener('click', () => {
                    editor.chain().focus().setTextAlign('left').run();
                });
                document.getElementById('toggleCenterAlignButton').addEventListener('click', () => {
                    editor.chain().focus().setTextAlign('center').run();
                });
                document.getElementById('toggleRightAlignButton').addEventListener('click', () => {
                    editor.chain().focus().setTextAlign('right').run();
                });
                document.getElementById('toggleJustifyButton').addEventListener('click', () => {
                    editor.chain().focus().setTextAlign('justify').run();
                });
            }
        })

    </script>
@endpush
