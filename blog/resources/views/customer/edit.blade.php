<h1>Edit Customer Details</h1>

<form action="/customers/{{ $customer->id }}" method="POST">
    @method('PATCH')

    <div>
        <label for="name">Name</label>
    <input type="text" name="name" id="name" autocomplete="off" value="{{ $customer->name }}">
        @error('name') <p style="color:red;">{{ $message }}</p> @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" autocomplete="off" value="{{ $customer->email }}">
        @error('email') <p style="color:red;">{{ $message }}</p> @enderror
    </div>
    @csrf
    <button type="submit">Save Customer</button>
</form>
