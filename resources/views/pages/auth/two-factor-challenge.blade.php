<x-layouts.auth> 

    <x-slot:title>
        2FA | Inventiro
    </x-slot:title>

    <form class="card card-md" action="{{ route('two-factor.login') }}" method="POST">
        @csrf
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Two Factor Authentication</h2>
        <div class="mb-3">
          <label class="form-label">2FA Code</label>
          <input type="text" class="form-control" name="code">
        </div>

        <div class="mb-3">
          <label class="form-check">
            <input type="checkbox" class="form-check-input"/>
            <span class="form-check-label">Forgot device? <a href="#">Login with secret code</a></span>
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Authenticate</button>
        </div>
      </div>
    </form>
    {{-- <div class="text-center text-muted mt-3">
      Already have account? <a href="./sign-in.html" tabindex="-1">Sign in</a>
    </div> --}}

</x-layouts.auth>