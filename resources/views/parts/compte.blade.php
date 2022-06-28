
<div class="max-w-screen-xl mx-auto">
<div class="flex items-center pb-2 text-gray-100 text-sm">
    <a rel="noopener noreferrer" href="/"
        class="px-5 py-1 border-b-2 border-gray-700 hover:border-blue-400 hover:text-blue-400">Retour</a>
</div>
<section class="p-6 text-gray-50">
	<form  action="" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
		<fieldset class="grid grid-cols-4 gap-6 p-6 bg-gray-600 rounded-md shadow-sm btnmenu">
			<div class="flex flex-row mx-auto space-x-2 sm:items-center justify-items-center md:justify-evenly">
                <img src="/img/avatar.png" alt="" class="block w-16 h-16 mr-4 rounded-full cover ">
                <button type="file" class="px-4 py-2 border border-gray-100 rounded-md">Choisir</button>
            </div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label for="firstname" class="text-sm">Nom</label>
					<input id="firstname" type="text" placeholder="Nom" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->nom }}">
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="lastname" class="text-sm">Prenom</label>
					<input id="lastname" type="text" placeholder="Prenom" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->prenom }}">
				</div>
                <div class="col-span-full sm:col-span-3">
					<label for="pseudo" class="text-sm">Pseudo</label>
					<input id="pseudo" type="text" placeholder="Pseudo" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " >
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="email" class="text-sm">Email</label>
					<input id="email" type="email" placeholder="Email" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " value="{{Auth::user()->email }}">
				</div>
				<div class="col-span-full">
					<label for="address" class="text-sm">Address</label>
					<input id="address" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " >
				</div>
                <div class="col-span-full sm:col-span-2">
					<label for="phone" class="text-sm">Numéro de télephone</label>
					<input id="phone" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " >
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="ville" class="text-sm">Ville</label>
					<input id="ville" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " ">
				</div>
                <div class="col-span-full sm:col-span-2">
                    <label for="pays" class="text-sm">Pays</label>
                    <input id="pays" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " >
                </div>
				<div class="col-span-full sm:col-span-2">
					<label for="zip" class="text-sm">Code postale</label>
					<input id="zip" type="text" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 " >
				</div>
                <div class="col-span-full sm:col-span-2">
					<label for="password" class="text-sm">Nouveau mot de passe</label>
					<input id="password" type="password" placeholder="" class="w-full pl-2 text-gray-900 border-gray-700 rounded-md focus:ring focus:ring-opacity-60 ">
				</div>
                <div class="col-span-full sm:col-span-2">
                    
                    <button type="submit" class="px-4 py-2 mt-4 bg-indigo-900 border border-gray-100 rounded-md">Modifier</button>
				</div>
			</div>

		</fieldset>
	</form>
</section>



</div>