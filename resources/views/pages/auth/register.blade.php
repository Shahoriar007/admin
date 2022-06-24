<x-layouts.auth> 

    <x-slot:title>
        Register | Inventiro
    </x-slot:title>

    <form class="card card-md" action="" method="POST">
        @csrf
      <div class="card-body">
        <h2 class="card-title text-center mb-4">Create new account</h2>
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ old('name') }}">

          @foreach ($errors->get('name') as $message) 
            <div class="invalid-feedback d-block mb-1">
                {{ $message }}
            </div>
          @endforeach

        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email" value={{ old('email') }}>

          @foreach ($errors->get('email') as $message) 
            <div class="invalid-feedback d-block mb-1">
                {{ $message }}
            </div>
          @endforeach

        </div>

        <div class="mb-3">
            <label class="form-label">Phone number</label>
            <input type="tel" class="form-control" name="phone" placeholder="Enter phone" value={{ old('phone') }}>

            @foreach ($errors->get('phone') as $message) 
                <div class="invalid-feedback d-block mb-1">
                    {{ $message }}
                </div>
            @endforeach


        </div>

        <div class="mb-3">
            <label class="form-label">Shop name</label>
            <input type="text" class="form-control" name="shop_name" placeholder="Enter shop name" value={{ old('shop_name') }}>

            @foreach ($errors->get('shop_name') as $message) 
                <div class="invalid-feedback d-block mb-1">
                    {{ $message }}
                </div>
            @endforeach
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group input-group-flat">
            <input type="password" class="form-control"  placeholder="Password" name="password" autocomplete="off">
            <span class="input-group-text">
              <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
              </a>
            </span>
          </div>

            @foreach ($errors->get('password') as $message) 
                <div class="invalid-feedback d-block mb-1">
                    {{ $message }}
                </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <div class="input-group input-group-flat">
              <input type="password" class="form-control"  placeholder="Password" name="password_confirmation" autocomplete="off">
              <span class="input-group-text">
                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                </a>
              </span>
            </div>

            @foreach ($errors->get('password_confirmation') as $message) 
                <div class="invalid-feedback d-block mb-1">
                    {{ $message }}
                </div>
            @endforeach

          </div>

        <div class="mb-3">
          <label class="form-check">
            <input type="checkbox" class="form-check-input"/>
            <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">Create new account</button>
        </div>
      </div>
    </form>
    <div class="text-center text-muted mt-3">
      Already have account? <a href="./sign-in.html" tabindex="-1">Sign in</a>
    </div>

</x-layouts.auth>