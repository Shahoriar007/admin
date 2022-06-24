<x-layouts.app>
    <x-slot:title>
        Login | Inventiro
    </x-slot:title>

    <x-slot:pretitle>
        OVERVIEW
    </x-slot:pretitle>

    <x-slot:pageTitle>
        DASHBOARD
    </x-slot:pageTitle>


    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <label for="">Password</label>
                                <input type="password" name="password">

                                <button type="submit">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @push('scripts')

    @endpush
</x-layouts.app>
