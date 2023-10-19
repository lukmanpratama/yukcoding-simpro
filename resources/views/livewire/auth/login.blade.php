<div>
    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Login Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Login Start ====== -->
    <section class="ud-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-login-wrapper">
                        <div class="ud-login-logo">
                            <img src="assets/images/logo/logo-2.svg" alt="logo" />
                        </div>
                        <form wire:submit="login" class="ud-login-form">
                            <div class="ud-form-group">
                                <input wire:model="email" type="email" name="email" placeholder="Email" />
                            </div>
                            <div class="ud-form-group">
                                <input wire:model="password" type="password" name="password" placeholder="Password" />
                            </div>
                            <div class="ud-form-group">
                                <button type="submit" class="ud-main-btn w-100">Login</button>
                            </div>
                        </form>

                        <div class="ud-socials-connect">
                            <p>Connect With</p>

                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="facebook">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="twitter">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="google">
                                        <i class="lni lni-google"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <a class="forget-pass" href="javascript:void(0)">
                            Forget Password?
                        </a>
                        <p class="signup-option">
                            Not a member yet? <a href="/registrasi" wire:navigate> Sign Up </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Login End ====== -->
</div>
