<div class="p-3 border bg-white">

  <h2 class="h5 font-weight-bold">
    Signup
  </h2>

  <div class="text-secondary mb-4">
    Easy signup
  </div>

  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" wire:model="name">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" wire:model="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" wire:model="password">
    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" wire:model="password_confirm">
    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="py-3">
    @include ('partials.button-general', ['btnText' => 'Signup', 'clickMethod' => 'store',])
  </div>

  <div class="py-3 text-secondary">
    <small>
      By continuing, you aggree to our <a href="">Terms of Use</a> and <a href="">Privacy policy</a>.
    </small>
  </div>

</div>
