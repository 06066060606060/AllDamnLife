<section class="max-w-screen-xl pt-4 mx-auto">
<div class="text-gray-400 bg-gray-900 body-font rounded-lg">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center justify-around">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
        <img class="object-cover object-center rounded h-24 w-auto p-8" alt="hero" src="{{ Auth::user()->photo }}">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h1>
        <p class="mb-2 leading-relaxed">75b chemin lebon</p>
        <p class="mb-2 leading-relaxed">97410</p>
        <p class="mb-2 leading-relaxed">Saint-Pierre</p>
        <div class="flex justify-center">
          <button class="p-2 mb-4 inline-flex text-white bg-blue-600 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Editer</button>
        </div>
      </div>
    </div>
</div>
</section>