<div>
    {{-- <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif --}}

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
     @endif

     @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>