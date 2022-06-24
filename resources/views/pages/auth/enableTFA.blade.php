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

                            <form method="POST" action="{{ route('two-factor.enable') }}">
                                @csrf

                                <button type="submit">submit</button>
                            </form>

                            @if (session('status') == 'two-factor-authentication-enabled')
                                <div class="mb-4 font-medium text-sm">
                                    Please finish configuring two factor authentication below. <br><br><br>
                                    
                                    {!! Auth::user()->twoFactorQrCodeSvg(); !!}

                                    <br> <br> <br>

                                    <form method="POST" action="{{ route('two-factor.confirm') }}">
                                        @csrf
                                        <input type="text" name="code">
                                        <button type="submit">submit</button>
                                    </form>
                                </div>
                            @endif

                            @if (session('status') == 'two-factor-authentication-confirmed')
                                <div class="mb-4 font-medium text-sm">
                                    Two factor authentication confirmed and enabled successfully.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @push('scripts')

    @endpush
</x-layouts.app>
