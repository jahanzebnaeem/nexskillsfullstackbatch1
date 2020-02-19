<h1>List of Countries</h1>
<a href="/countries/create">Add Country</a>
<table>
    <tr>
        <th>Country Name</th>
    </tr>
    @forelse ($countries as $country)
        <tr>
            <td>{{ $country->name }}</td>
        </tr>
    @empty
        <tr>
            <td>No country found.</td>
        </tr>
    @endforelse
</table>
