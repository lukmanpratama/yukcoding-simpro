<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Profile</h4>
            <ul class="breadcrumbs">
                <ul class="nav nav-line nav-color-secondary">
                    <li class="nav-item">
                        <a class="nav-link active" href="/pemilik/profile" wire:navigate>Lihat Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pemilik/profile/edit" wire:navigate>Edit Profile</a>
                    </li>
                </ul>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Lihat Profile</h4>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="avatar avatar-xxl">
                                    <img src="{{ asset('storage/foto/'.Auth::user()->foto) }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4><b>Nama Pengguna</b></h4>
                                <p>{{Auth::user()->name}}</p>
                                <h4><b>Email</b></h4>
                                <p>{{Auth::user()->email}}</p>
                                <h4><b>Alamat</b></h4>
                                <p>{{Auth::user()->alamat}}</p>
                                <h4><b>No Handphone</b></h4>
                                <p>{{Auth::user()->nohp}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
