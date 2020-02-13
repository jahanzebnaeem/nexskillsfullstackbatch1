<h1>Customers</h1>

<a href="/customers/create">Add New Customer</a>

@forelse ($customers as $customer)
    <p>
        <strong>
        <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
        </strong> ({{ $customer->email }})
    </p>
@empty
    <p>No Customers to show</p>
@endforelse
