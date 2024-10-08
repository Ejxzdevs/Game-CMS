<div >
    <a href="#" class="text-decoration-none ms-1 me-5 fw-medium fm-lato anchor-hover" wire:click="openLoginModal">Sign In</a>    
<!-- Modal -->
<div class="modal fade @if($showModal) show @endif " tabindex="-1" role="dialog " style="display: @if($showModal) block @else none @endif ; background-color: rgba(0, 0, 0, 0.5)">
    <div class="modal-dialog" role="document">
        <div class="modal-content primary-color" style="border:none; border-radius: 0;">
          <div class="modal-header" style="border: none">
                <button style="border:none" type="button" class="modal-close-btn primary-color" wire:click="closeLoginModal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
          </div>
            <div class="modal-body">
              <div class="h-100 d-flex justify-content-center align-items-center">
                <form wire:submit.prevent="UserEntry" class="signup-custom-form d-flex flex-column gap-4" autocomplete="off">
                    <div class="d-flex flex-column justify-content-center align-items-center pt-2 " style="height:15%;">
                        <h4>User Entry</h4>
                    </div>
                    <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                        <label class="form-label fw-medium fs-sx">Email</label>
                        <input wire:model="email" type="email" class="custom-width form-control" placeholder="Enter your email" >
                        @error('email')
                          <span class="text-danger fs-6">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-center ps-5  " style="height: 20%;">
                        <label class="form-label fw-medium fs-sx">Password</label>
                        <input wire:model="password" type="password" class="custom-width form-control " placeholder="Enter your password" >
                        @error('password')
                          <span class="text-danger fs-6 mb-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex flex-column justify-content-center ps-5" style="height: 25%;">
                        <button type="submit" class="custom-width btn btn-dark letter-spacing-lg text-capitalize">Submit</button>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
        
    </div>   <!-- Modal -->


</div>
