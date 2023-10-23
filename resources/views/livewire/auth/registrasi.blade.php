<div>
    <section class="ud-hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ud-blog-details-content wow fadeInUp" data-wow-delay=".2s"">
                        <h2 class="ud-blog-details-title">
                            Facing a challenge is kind of a turn-on for an easy rider
                        </h2>
                        <p class="ud-blog-details-para">
                            There’s a time and place for everything… including asking for
                            reviews. For instance: you should not asking for a review on
                            your checkout page. The sole purpose of this page is to guide
                            your customer to complete their purchase, and this means that
                            the page should be as minimalist and pared-down possible. You
                            don’t want to have any unnecessary elements or Call To Actions.
                        </p>
                        <p class="ud-blog-details-para">
                            At quo cetero fastidii. Usu ex ornatus corpora sententiae,
                            vocibus deleniti ut nec. Ut enim eripuit eligendi est, in
                            iracundia signiferumque quo. Sed virtute suavitate suscipiantur
                            ea, dolor this can eloquentiam ei pro. Suas adversarium
                            interpretaris eu sit, eum viris impedit ne. Erant appareat
                            corrumpit ei vel.
                        </p>
                        <p class="ud-blog-details-para">
                            At quo cetero fastidii. Usu ex ornatus corpora sententiae,
                            vocibus deleniti ut nec. Ut enim eripuit eligendi est, in
                            iracundia signiferumque quo. Sed virtute suavitate suscipiantur
                            ea, dolor this can eloquentiam ei pro. Suas adversarium
                            interpretaris eu sit, eum viris impedit ne. Erant appareat
                            corrumpit ei vel.
                        </p>
                        <p class="ud-blog-details-para">
                            At quo cetero fastidii. Usu ex ornatus corpora sententiae,
                            vocibus deleniti ut nec. Ut enim eripuit eligendi est, in
                            iracundia signiferumque quo. Sed virtute suavitate suscipiantur
                            ea, dolor this can eloquentiam ei pro. Suas adversarium
                            interpretaris eu sit, eum viris impedit ne. Erant appareat
                            corrumpit ei vel.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ud-login-wrapper">
                        <div class="ud-login-logo">
                            <h3 class="ud-newsletter-title">Join our newsletter!</h3>
                        </div>
                        <form wire:submit="registrasi" class="ud-login-form">
                            <div class="ud-form-group">
                                <input wire:model="nama" type="username" name="name" placeholder="Username">
                                @error('nama')
                                <small class="d-block mt-1 danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="ud-form-group">
                                <input wire:model="email" type="email" name="email" placeholder="Email">
                                @error('email')
                                    <small class="d-block mt-1 danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="ud-form-group">
                                <input wire:model="password" type="password" name="password" placeholder="Password">
                                @error('password')
                                    <small class="d-block mt-1 danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="ud-form-group">
                                <textarea wire:model="alamat" type="alamat" name="alamat" placeholder="Alamat"></textarea>
                                @error('alamat')
                                    <small class="d-block mt-1 danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="ud-form-group">
                                <input wire:model="nohp" type="tel"  name="nohp"
                                    placeholder="No Hp xxxx-xxxx-xxxx">
                                @error('nohp')
                                    <small class="d-block mt-1 danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="ud-form-group">
                                <button type="submit" class="ud-main-btn w-100">Daftar</button>
                            </div>
                        </form>

                        <p class="signup-option">
                            Have a member yet? <a href="/login" wire:navigate> Sign In </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
