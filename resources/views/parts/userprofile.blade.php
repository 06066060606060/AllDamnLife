<section class="max-w-screen-xl pt-4 mx-auto">
    <div class="text-gray-400 bg-gray-900 body-font rounded-lg bg-opacity-80 shadow-sm">
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

    <div class="flex flex-col justify-center mx-auto  mt-10 md:flex-row">
      @foreach ($comments as $comment)
           <div
          class="container flex flex-col w-full max-w-lg p-6 mx-auto md:mx-4 mt-4 text-gray-100 transition duration-500 bg-gray-900 divide-y divide-gray-700 rounded-md btnmenu hover:scale-105">
          <div class="flex justify-between p-4">
              <div class="flex space-x-4">
               
                  <div>
                      <img src="{{$comment->user->photo}}" alt="" class="object-cover w-12 h-12 bg-gray-500 rounded-full">
                  </div>
                  <div>
                      <h4 class="font-bold">{{$comment->user->prenom}} {{$comment->user->nom}}</h4>
                      <span class="text-sm text-gray-400">{{ $comment->created_at->diffForHumans() }} </span>
                  </div>
              </div>
              <div class="pl-2 flex flex-row items-center space-x-2 text-yellow-500">
                  @for ($i = 0; $i < $comment->note; $i++)
                  <i class="text-yellow-500 fa-solid fa-star"></i>
              @endfor
              </div>
              <a href="/deleteComm/{{ $comment->id_comm }}"><i class="pl-4 fa-solid fa-trash-can hover:text-red-600"></i></a>
          </div>
          <div class="p-4 space-y-2 text-xl  max-w-xl text-gray-400">
              <span class="break-words">{{$comment->contenu}}</span>
  
              
          </div>
      </div>
  @endforeach
     
  </div>
  


</section>
