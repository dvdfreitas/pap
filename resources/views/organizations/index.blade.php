<x-guest-layout>

    <div class="container">
        <h1>Listar organizações</h1>


        {{ App\Models\Organization::all() }}
    </div>

</x-guest-layout>
