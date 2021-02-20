<x-guest-layout>

    <div class="container">
        <h1>Criar organizações</h1>

        <div class="w-50 m-auto mt-4">
            <form action="/organizations" method="POST">
                @csrf
                <label for="name">Nome</label>
                <input type="text" name="name" class="m-2 form-control">
                <label for="email" >Email</label>
                <input type="email" name="email" class="m-2 form-control">
                <label for="password">Password</label>
                <input type="password" name="password" class="m-2 form-control">

                <input type="submit" class="m-2 mt-4 form-control btn-danger">
            </form>
        </div>
    </div>

</x-guest-layout>
