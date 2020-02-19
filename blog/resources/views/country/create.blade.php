<h1>Add New Country</h1>

<form action="/countries" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" autocomplete="off" value="{{ old('name') }}">
        @error('name') <p style="color:red;"> {{ $message }} </p> @enderror
    </div>
    @csrf
    <button type="submit">Add Country</button>
</form>
