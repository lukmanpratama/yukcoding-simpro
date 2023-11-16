<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Proyek</h4>
            <ul class="breadcrumbs">
                <ul class="nav nav-line nav-color-secondary">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin" wire:navigate>Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/pemilik/pengguna" wire:navigate>Pengguna</a>
                    </li>
                </ul>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Daftar Pengguna</h4>

                        </div>
                    </div>
                    <div class="card-body">
                        <button wire:click="create" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus"></i>
                            Add Rowb
                        </button>
                        <!-- Modal -->
                        @if ($isOpen)
                            <div class="modal show" tabindex="-1" role="dialog" style="display: block;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-bg-dark">

                                        <div class="modal-header">
                                            <h5 class="modal-title">
                                                {{ $penggunaId ? 'Edit pengguna' : 'Create pengguna' }}
                                            </h5>
                                            <svg wire:click="closeModal" xmlns="http://www.w3.org/2000/svg"
                                                width="32" height="32" fill="currentColor" class="bi bi-x"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                        <div class="modal-body">

                                            <form wire:submit.prevent="{{ $penggunaId ? 'update' : 'store' }}">
                                                <div class="form-group">
                                                    <label for="title">Nama Proyek</label>
                                                    <input type="text" wire:model="nama_proyek" class="form-control"
                                                        id="nama_proyek" placeholder="Enter post title">
                                                </div>
                                                <div class="form-group">
                                                    <label for="body">Deskripsi</label>
                                                    <textarea wire:model="deskripsi_proyek" class="form-control" id="deskripsi_proyek" rows="4"
                                                        placeholder="Enter post body"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Jenis Proyek</label>
                                                    <input type="text" wire:model="jenis_proyek" class="form-control"
                                                        id="jenis_proyek" placeholder="Enter post title">
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-4">
                                                    {{ $proyekId ? 'Update' : 'Create' }}
                                                </button>
                                                <button type="button" wire:click="closeModal"
                                                    class="btn btn-secondary mt-4">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-backdrop fade show"></div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="control-label col-sm-2">Show</label>
                                    <div class="col-md-4">
                                        <select wire:model.live="limit" class="form-control select"
                                            aria-label="Default select example">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-sm-2">Entries</label>
                                </div>

                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input type="search" wire:model.live.debounce.50ms="search" class="form-control"
                                    placeholder="Search..." id="search">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name proyek</th>
                                        <th>Owner</th>
                                        <th>Manager</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyeks as $proyek)
                                        <tr wire:key="{{ $proyek->id }}">
                                            <td>{{ $loop->index + $proyeks->firstItem() }}</a></td>
                                            <td><a href="/pemilik/proyek/{{ $proyek->id }}"  title="Detil Proyek" wire:navigate>{{ $proyek->nama_proyek }}</a></td>
                                            <td>
                                                @foreach ($proyek->users->where('role', '=', 'pemilik') as $user)
                                                <div class="avatar-sm">
                                                    <img src="{{ asset('storage/foto/'.$user->foto) }}" alt="dashboard." class="avatar-img rounded-circle">
                                                </div>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($proyek->users->where('role', '=', 'manajer') as $user)
                                                    <button
                                                        class="btn btn-sm btn-primary me-2">{{ $user->name }}</button>
                                                @endforeach
                                            </td>
                                            <td>{{ $proyek->created_at->format('d F, Y') }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button wire:click="edit({{ $proyek->id }})" type="button"
                                                        data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button
                                                        onclick="return confirm('Are you sure you want to delete this item?') || event.stopImmediatePropagation()"
                                                        wire:click="delete({{ $proyek->id }})" type="button"
                                                        data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-danger" data-original-title="Remove">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <x-app.pagination :items="$proyeks" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
