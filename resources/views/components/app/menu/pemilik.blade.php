<ul class="nav nav-primary">
    <li class="nav-item {{ (request()->is('pemilik')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/pemilik" wire:navigate class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>dashboard</p>
        </a>
    </li>
    <li class="nav-section">
        <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Menu</h4>
    </li>
    <li class="nav-item {{ (request()->is('pemilik/proyek*')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/pemilik/proyek" wire:navigate>
            <i class="fas fa-layer-group"></i>
            <p>Proyek</p>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('pemilik/rapat')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/pemilik/rapat" wire:navigate>
            <i class="fas fa-layer-group"></i>
            <p>Proyek</p>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('pemilik/pembayaran')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/pemilik/pembayaran" wire:navigate>
            <i class="fas fa-layer-group"></i>
            <p>Proyek</p>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('pemilik/order')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/pemilik/order" wire:navigate>
            <i class="fas fa-layer-group"></i>
            <p>Proyek</p>
        </a>
    </li>
</ul>
