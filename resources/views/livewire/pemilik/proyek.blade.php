<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Avatars</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/pemilik/proyek" wire:navigate>
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item {{ request()->is('pemilik/proyek/tugas') ? 'primary' : '' }}">
                    <a href="/pemilik/proyek/tugas" wire:navigate>Proyek</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item {{ request()->is('pemilik/proyek/kalender') ? 'primary' : '' }}">
                    <a href="/pemilik/proyek/kalender" wire:navigate>Avatars</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Add Row</h4>
                            <button wire:click="create" class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Add Row
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Modal -->
                        @if ($isOpen)
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header no-bd">
                                        <h5 class="modal-title">
                                            {{$proyekId ? 'Edit Proyek' : 'Create Proyek' }}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="small">Create a new row using this form, make sure you fill them all
                                        </p>
                                        <form wire:submit.prevent="{{ $proyekId ? 'update' : 'store' }}">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Name Proyek</label>
                                                        <input wire:model="nama_proyek" type="text" class="form-control"
                                                            placeholder="nama proyek">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Deskripsi Proyek</label>
                                                        <textarea wire:model="deskripsi_proyek" class="form-control" name="" id="" cols="30" rows="10" placeholder="deskripsi proyek"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Jenis Proyek</label>
                                                        <select wire:model="jenis_proyek" name="" id="" class="form-control select">
                                                            <option value="Website">Website</option>
                                                            <option value="Web App">Web App</option>
                                                            <option value="Android App">Android App</option>
                                                            <option value="Ios App">Ios App</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer no-bd">
                                        <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="control-label col-sm-2">Show</label>
                                    <div class="col-md-4">
                                        <select wire:model.live="limit" class="form-control select"
                                            aria-label="Default select example">
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
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td><a href="">Proyek A</a></td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
