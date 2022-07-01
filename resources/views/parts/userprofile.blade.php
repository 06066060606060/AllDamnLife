<section class="max-w-screen-xl pt-4 mx-auto">
    <div class="text-gray-400 bg-gray-900 body-font rounded-lg btnmenu">
        <div class="lg:pl-32 container mx-auto flex px-5 py-24 md:flex-row flex-col items-center justify-center">
            <img class="object-cover object-center rounded h-48 w-auto p-8" alt="hero" src="{{ $user->photo }}">
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-32 md:pl-24 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">{{ $user->prenom }}
                    {{ $user->nom }}</h1>
                <p class="mb-2 leading-relaxed">{{ $user->address }}</p>
                <p class="mb-2 leading-relaxed">{{ $user->zipCode }}</p>
                <p class="mb-2 leading-relaxed">{{ $user->city }}</p>
                <p class="mb-2 leading-relaxed">{{ $user->numero_telephone }}</p>
                <p class="mb-2 leading-relaxed">{{ $user->email }}</p>
            </div>
        </div>
    </div>
</section>
