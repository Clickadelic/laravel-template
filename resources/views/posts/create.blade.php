<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="bg-white dark:bg-gray-800 border rounded-md shadow-sm overflow-hidden">
                    <table class="w-full text-sm">
                        <thead class="bg-gray-50 dark:bg-gray-700 border-b dark:border-b-gray-700 text-gray-500">
                            <tr>
                                <th class="px-4 py-2 text-left">Titel</th>
                                <th class="px-4 py-2 text-left">Autor</th>
                                <th class="px-4 py-2 text-left">Kategorie</th>
                                <th class="px-4 py-2 text-left">Vorschau</th>
                                <th class="px-4 py-2 text-right">Datum</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <!-- Blogpost 1 -->
                            <tr class="hover:bg-gray-50 cursor-pointer">
                                <td class="px-4 py-3 font-semibold text-gray-800">
                                    Wie man Laravel mit InertiaJS verbindet
                                </td>
                                <td class="px-4 py-3 text-gray-700">Max Mustermann</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 text-xs rounded bg-blue-100 text-blue-700">Webdev</span>
                                </td>
                                <td class="px-4 py-3 text-gray-600">
                                    Lerne Schritt für Schritt, wie man eine Laravel-App mit InertiaJS und React aufsetzt ...
                                </td>
                                <td class="px-4 py-3 text-right text-gray-500 whitespace-nowrap">28. Aug 2025</td>
                            </tr>

                            <!-- Blogpost 2 -->
                            <tr class="hover:bg-gray-50 cursor-pointer">
                                <td class="px-4 py-3 font-semibold text-gray-800">
                                    10 Tipps für bessere UI mit TailwindCSS
                                </td>
                                <td class="px-4 py-3 text-gray-700">Lisa Beispiel</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">Design</span>
                                </td>
                                <td class="px-4 py-3 text-gray-600">
                                    Kleine Tricks mit Tailwind, die deine Oberflächen sofort professioneller wirken lassen ...
                                </td>
                                <td class="px-4 py-3 text-right text-gray-500 whitespace-nowrap">27. Aug 2025</td>
                            </tr>

                            <!-- Blogpost 3 -->
                            <tr class="hover:bg-gray-50 cursor-pointer">
                                <td class="px-4 py-3 font-semibold text-gray-800">
                                    Moderne Auth mit Laravel Breeze
                                </td>
                                <td class="px-4 py-3 text-gray-700">Anna Entwickler</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 text-xs rounded bg-purple-100 text-purple-700">Backend</span>
                                </td>
                                <td class="px-4 py-3 text-gray-600">
                                    Breeze ist ein einfacher Einstieg in Laravel-Auth – hier zeige ich dir, wie du es erweiterst ...
                                </td>
                                <td class="px-4 py-3 text-right text-gray-500 whitespace-nowrap">25. Aug 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>