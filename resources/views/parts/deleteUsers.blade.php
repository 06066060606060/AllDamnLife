<form action="/delete/{{$user->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit"
    class="p-3 text-red-400 cursor-pointer hover:bg-gray-800 hover:text-red-600 hover:font-medium">
    <i class="fa-solid fa-trash-can"></i>
</button>
</form>