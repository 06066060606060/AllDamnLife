
<div class="max-w-screen-xl mx-auto">
<div class="flex items-center pb-2 text-gray-100 text-sm">
    <a rel="noopener noreferrer" href="/"
        class="px-5 py-1 border-b-2 border-gray-700 hover:border-blue-400 hover:text-blue-400">Retour</a>
</div>
<section class="p-6 text-gray-50">
	<form method="POST" action="{{route('updateprofil',Auth::user()->id)}}" enctype="multipart/form-data" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
		@csrf
		<fieldset class="grid grid-cols-4 gap-6 p-6 bg-gray-600 rounded-md shadow-sm btnmenu">
			<div class="flex flex-row mx-auto space-x-2 sm:items-center justify-items-center md:justify-evenly">
                <img src="{{ asset('storage/' . Auth::user()->photo)}} " alt="" class="block w-16 h-16 mr-4 rounded-full cover ">
				<label for="files"
				class="flex items-center justify-center h-10 px-6 py-3 mt-1 space-x-2 text-sm tracking-wide text-white transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">Modifier
				 avatar</label>
			<input type="file" style="display:none" id="files"
				name="photo" value="" required>
            </div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label for="nom" class="text-sm">Nom</label>
					<input required id="nom" name="nom" type="text" placeholder="Nom" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->nom }}">
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="prenom" class="text-sm">Prenom</label>
					<input required id="prenom" name="prenom" type="text" placeholder="Prenom" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->prenom }}">
				</div>
                <div class="col-span-full sm:col-span-3">
					<label for="pseudo" class="text-sm">Pseudo</label>
					<input required id="pseudo" name="pseudo" type="text" placeholder="Pseudo" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->username }}" >
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="email" class="text-sm">Email</label>
					<input  required id="email" name="email" type="email" placeholder="Email" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->email }}">
				</div>
				<div class="col-span-full">
					<label for="address" class="text-sm">Address</label>
					<input  required id="address" name="address" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 "value="{{Auth::user()->address }}" >
				</div>
                <div class="col-span-full sm:col-span-2">
					<label for="phone" class="text-sm">Numéro de télephone</label>
					<input required id="phone" name="phone" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->numero_telephone}}">
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="ville" class="text-sm">Ville</label>
					<input required id="ville"  name="ville" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->city }}">
				</div>
                <div class="col-span-full sm:col-span-2">
                    <label for="pays" class="text-sm">Pays</label>
                    <input required id="pays" name="pays" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->country }}">
                </div>
				<div class="col-span-full sm:col-span-2">
					<label for="zip" class="text-sm">Code postale</label>
					<input required id="zip" name="zip" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->zipCode }}" >
				</div>
                <div class="col-span-full sm:col-span-2">
					<label for="password" class="text-sm">Nouveau mot de passe</label>
					<input  id="password"  name="password" type="password" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 ">
				</div>
                <div class="col-span-full sm:col-span-2">
                    
                    <button type="submit" class="px-4 py-2 mt-4 bg-indigo-900 border border-gray-100 rounded-md">Modifier</button>
				</div>
			</div>

		</fieldset>
	</form>
</section>



</div>