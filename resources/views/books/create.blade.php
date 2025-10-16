{{--<form method="POST" action="{{ route('books.store') }}">
@csrf    
<input type="text" id="title" name="title" required>
<button type="submit">Save Book</button>
</form> --}}


<form method="post" action="{{ route('books.store') }}"> 
    @csrf 
    <h3 class="font-bold border-b-gray-300 
                             border-b pb-2 mb-3 mt-4"> 
        Add a new book</h3> 
    <label>Name</label> 
    <input type="text" name="title" id="title" 
                     class="border border-gray-200 p-1"> 
    <input type="submit" name="send" value="Submit" 
                     class="bg-gray-200 p-1 cursor-pointer 
           border border-black"> 
		   
{{--add delete sub form	 --}}
	<form action="{{ route('books.destroy', $book) }}" method="POST">
                @csrf
                @method('DELETE')
	<button type="submit" class="border bg-gray-200 p-1 border-black">Delete</button>
	</form>  
</form>
