<h1>Add New Customer</h1>

<form action="/customers" method="POST">
    <div>
        <label for="name">Name</label>
    <input type="text" name="name" id="name" autocomplete="off" value="{{ old('name')}}">
        @error('name') <p style="color:red;">{{ $message }}</p> @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" autocomplete="off" value="{{ old('email')}}">
        @error('email') <p style="color:red;">{{ $message }}</p> @enderror
    </div>
    @csrf
    <button type="submit">Add New Customer</button>
</form>
