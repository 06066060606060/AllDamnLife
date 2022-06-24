<form action="/delete/{{ $user->id }}" method="post">
    @csrf
    @method('delete')
    <!-- component -->
    

    <div class="relative py-3 sm:max-w-xl sm:mx-auto">

        <!-- AlpineJS -->
        <div x-data="{ value: 'unset', offValue: 'Off', onValue: 'On' }">

            <div class="flex items-center m-2 cursor-pointer cm-toggle-wrapper"
                x-on:click="value =  (value == onValue ? offValue : onValue);">
                <span class="font-semibold text-xs mr-1">
                    Off
                </span>
                <div class="rounded-full w-8 h-4 p-0.5 "
                    :class="{'bg-red-500': value == offValue, 'bg-green-500': value == onValue }">
                    <div class="rounded-full w-3 h-3 bg-white transform mx-auto duration-300 ease-in-out"
                        :class="{ '-translate-x-2': value == offValue, 'translate-x-2': value == onValue }"></div>
                </div>
                <span class="font-semibold text-xs ml-1">
                    On
                </span>
            </div>
        </div>
    </div>
</form>
