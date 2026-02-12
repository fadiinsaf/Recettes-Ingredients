@foreach($recettes as $index => $recette)
    <div class="recipe-card bg-white rounded-2xl shadow-lg overflow-hidden animate-slide-up" 
         style="animation-delay: {{ $index * 0.1 }}s;">
        
        <!-- Image de la recette -->
        <div class="relative h-64 overflow-hidden">
            @if($recette->image)
                <img src="{{ asset('storage/' . $recette->image) }}" 
                     alt="{{ $recette->titre }}" 
                     class="w-full h-full object-cover">
            @else
                <div class="image-placeholder w-full h-full flex items-center justify-center">
                    <i class="fas fa-utensils text-white text-7xl opacity-40"></i>
                </div>
            @endif
            
            <!-- Badge catégorie en overlay -->
            <div class="absolute top-4 right-4">
                <span class="badge text-white px-4 py-2 rounded-full text-xs font-semibold shadow-lg inline-flex items-center">
                    <i class="fas fa-tag mr-1.5 text-xs"></i>
                    {{ $recette->categorie->titre ?? 'Sans catégorie' }}
                </span>
            </div>

            <!-- Badge auteur en overlay (bas gauche) -->
            <div class="absolute bottom-4 left-4">
                <div class="bg-white/90 backdrop-blur-sm px-3 py-2 rounded-full text-xs font-medium text-gray-700 shadow-md inline-flex items-center">
                    <i class="fas fa-user-circle text-orange-500 mr-1.5"></i>
                    {{ $recette->user->name }}
                </div>
            </div>
        </div>

        <!-- Contenu de la carte -->
        <div class="p-6">
            <!-- Titre -->
            <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2 min-h-[3.5rem]">
                {{ $recette->titre }}
            </h3>

            <!-- Description -->
            <p class="text-gray-600 text-sm mb-4 line-clamp-3 min-h-[4rem] leading-relaxed">
                {{ $recette->description }}
            </p>

            <!-- Statistiques -->
            <div class="flex items-center justify-between text-sm text-gray-500 mb-5 pb-5 border-b border-gray-100">
                <div class="flex items-center">
                    <i class="fas fa-shopping-basket text-orange-400 mr-2"></i>
                    <span class="font-medium">{{ $recette->ingredients->count() }} ingrédient{{ $recette->ingredients->count() > 1 ? 's' : '' }}</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-list-ol text-orange-400 mr-2"></i>
                    <span class="font-medium">{{ $recette->etapes->count() }} étape{{ $recette->etapes->count() > 1 ? 's' : '' }}</span>
                </div>
            </div>

            <!-- Date et bouton -->
            <div class="flex items-center justify-between">
                <div class="flex items-center text-xs text-gray-500">
                    <i class="fas fa-calendar-alt text-orange-400 mr-1.5"></i>
                    <span>{{ $recette->created_at->format('d/m/Y') }}</span>
                </div>
                
                <a href="{{ route('recettes.show', $recette) }}" 
                   class="btn-view text-white px-5 py-2.5 rounded-lg text-sm font-semibold shadow-md inline-flex items-center group">
                    Voir la recette
                    <i class="fas fa-arrow-right ml-2 transform transition-transform group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>
    </div>
@endforeach