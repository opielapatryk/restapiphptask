<!DOCTPE html>
<html>
<head>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>View People Records</title>
</head>
<body>
    <nav>
        <a href="/create">
            <button>
                Create
            </button>
        </a>
        <br>
        <form>
            <input
    type="search"
    autofocus="autofocus"
    id="searchInput"
    placeholder="Write person name"
    name="search"
    value="{{ request('search') }}"
>
        </form>
    </nav>
    <table border = "1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>phone</td>
        <td>street</td>
        <td>city</td>
        <td>country</td>
        <td>email</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    @forelse ($people as $person)
        <tr>
        <td>{{ $person->id }}</td>
        <td>{{ $person->name }}</td>
        <td>{{ $person->phone }}</td>
        <td>{{ $person->street }}</td>
        <td>{{ $person->city }}</td>
        <td>{{ $person->country }}</td>
        <td>{{ $person->email }}</td>
        <td><a href = 'edit/{{ $person->id }}'>Edit</a></td>
        <td><form action="/delete/{{ $person->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
        </td>
        </tr>
        @empty
        <td>User not found</td>
        @endforelse
    </table>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById('searchInput');
            const urlParams = new URLSearchParams(window.location.search);
            const searchParam = urlParams.get('search');
            searchInput.value = searchParam;
            const end = searchInput.value.length;
            
    
            searchInput.addEventListener('input', function() {
                const searchValue = searchInput.value;
                const newUrlParams = new URLSearchParams(window.location.search);
                newUrlParams.set('search', searchValue);
                const newUrl = `${window.location.pathname}?${newUrlParams.toString()}`;
                window.history.replaceState({}, '', newUrl);
    
                // Perform the search here
                window.location.href = `/opiela/52205?search=${encodeURIComponent(searchValue)}`;
                
                setTimeout(function(){ 
                    searchInput.setSelectionRange(end, end);
                    searchInput.focus();
                }, 0);
                });
            });
            
    </script>
    
    
</body>
</html>