<div class="sidebar sidebar-style-1">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('dashboard/assets/img/profile.jpg') }}" alt="dashboard." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @if (auth()->user()->role=="admin")
            <x-app.menu.admin/>
            @endif
            @if (auth()->user()->role=="manajer")
            <x-app.menu.manajer/>
            @endif
            @if (auth()->user()->role=="pemilik")
            <x-app.menu.pemilik/>
            @endif
            @if (auth()->user()->role=="tim")
            <x-app.menu.tim/>
            @endif
        </div>
    </div>
</div>
