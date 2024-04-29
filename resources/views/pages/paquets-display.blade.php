<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Memorydeck') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{ $paquet->nom }}
                <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                            <a href="https://laravel.com/docs">{{ $paquet->nom }}</a>
                        </h2>
                    </div>

                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <div>

                        <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8 text-left">
                            <!-- Formulaire pour l'input de nom de paquet et le bouton "Valider" -->
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Ajouter un mot</h2>
                            <form action="{{ route('paquets.mots.store', ['paquet' => $paquet->id]) }}" method="POST">
                                @csrf
                                <div class="flex items-center mb-4">
                                    <input type="text" name="nom_fr" class="block px-4 py-2 mr-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-400" placeholder="Mot en français" required>
                                    <input type="text" name="nom_en" class="block px-4 py-2 mr-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-400" placeholder="Mot en anglais" required>
                                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ajouter</button>
                                </div>
                            </form>
                        </div>
                        <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8">
                            <!-- Liste des paquets et le bouton "Supprimer" -->
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Liste des mots</h2>
                            

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>