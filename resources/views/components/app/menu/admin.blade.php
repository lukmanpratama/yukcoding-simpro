<ul class="nav nav-primary">
    <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/admin" wire:navigate class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-section">
        <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Menu</h4>
    </li>
    <li class="nav-item {{ (request()->is('admin/pengguna')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/admin/pengguna" wire:navigate>
            <i class="fas fa-layer-group"></i>
            <p>Pengguna</p>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('admin/proyek*')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/admin/proyek" wire:navigate>
            <i class="fas fa-layer-group"></i>
            <p>Proyek</p>
        </a>
    </li>

    <li class="nav-item {{ (request()->is('admin/pembayaran')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/admin/pembayaran" wire:navigate>
            <i class="fas fa-layer-group"></i>
            <p>Pembayaran</p>
        </a>
    </li>
    <li class="nav-item {{ (request()->is('admin/order')) ? 'active' : '' }}">
        <a data-toggle="collapse" href="/admin/order" wire:navigate>
            <i class="fas fa-layer-group"></i>
            <p>Proyek</p>
        </a>
    </li>
</ul>
