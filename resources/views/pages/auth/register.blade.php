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
                            <form method="POST">
                                @csrf

                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" /> <br>

                                <label>{{ __('Email') }}</label>
                                <input type="text" name="email" /> <br>

                                <label>{{ __('Password') }}</label>
                                <input type="password" name="password" /> <br>

                                <label>{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirmation" />

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
