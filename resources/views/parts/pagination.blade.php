<div class="flex justify-center pb-5 space-x-1 text-gray-100">
	
	<button title="previous" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 bg-gray-900 border border-gray-800 rounded-md shadow-md">
		<svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
			<polyline points="15 18 9 12 15 6"></polyline>
		</svg>
	</button>
	@foreach ($cards as $produit)
		
	
	<a href = "/section/" class="inline-flex items-center justify-center w-8 h-8 text-sm font-semibold text-teal-400 bg-gray-900 border border-teal-400 rounded shadow-md">{{$produits->id}}</a>
@endforeach

<button title="next" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 bg-gray-900 border border-gray-800 rounded-md shadow-md">
		<svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
			<polyline points="9 18 15 12 9 6"></polyline>
		</svg>
	</button>
	
</div>
