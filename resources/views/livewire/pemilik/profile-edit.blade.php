<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Profile</h4>
            <ul class="breadcrumbs">
                <ul class="nav nav-line nav-color-secondary">
                    <li class="nav-item">
                        <a class="nav-link" href="/pemilik/profile" wire:navigate>Lihat Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/pemilik/profile/edit" wire:navigate>Edit Profile</a>
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
                                <form wire:submit.prevent="update">
                                    <div class="form-group">
                                        <label for="title">Nama Tugas</label>
                                        <input type="text" wire:model="profile_nama" class="form-control"
                                            id="nama_tugas" placeholder="Enter post title">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Email</label>
                                        <input type="text" wire:model="profile_email" class="form-control"
                                            id="nama_tugas" placeholder="Enter post title">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Alamat</label>
                                        <input type="text" wire:model="profile_alamat" class="form-control"
                                            id="nama_tugas" placeholder="Enter post title">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nomor Handphone</label>
                                        <input type="text" wire:model="profile_nohp" class="form-control"
                                            id="nama_tugas" placeholder="Enter post title">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Foto Profile</label>
                                        <input type="file" wire:model="profile_foto" class="form-control"
                                            id="nama_tugas" placeholder="Enter post title">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4">
                                        Update
                                    </button>
                                    <button type="button" wire:click="closeModal"
                                        class="btn btn-secondary mt-4">Close</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
