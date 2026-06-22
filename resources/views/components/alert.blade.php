<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
     @endif


</div>