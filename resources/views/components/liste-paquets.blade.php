<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
        </svg>
        <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
            <a href="https://laravel.com/docs">Paquets</a>
        </h2>
    </div>

    <div>
        <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8 text-left">
            <!-- Formulaire pour l'input de nom de paquet et le bouton "Valider" -->
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Ajouter un paquet</h2>
            <form action="{{ route('paquets.store') }}" method="POST">
                @csrf
                <div class="flex items-center mb-4">
                    <input type="text" name="nom" id="nom" class="block px-4 py-2 mr-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-400" placeholder="Nom du paquet" required>
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Valider</button>
                </div>
            </form>
        </div>
        <div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 p-6 lg:p-8">
            <!-- Liste des paquets et le bouton "Supprimer" -->
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Liste des paquets</h2>
            <div>
            @foreach (Auth::user()->paquets as $paquet)
            <div>
                <a href="{{ route('paquets.display', ['id' => $paquet->id]) }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ $paquet->nom }}
                </a>
                <a href="{{ route('paquets.destroy', ['id' => $paquet->id]) }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Supprimer
                </a>
            </div>
            @endforeach
            </div>

        </div>

    </div>
</div>