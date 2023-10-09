<aside class="main-sidebar elevation-4" style="background: #757575; padding-top: 20px;">

    <div class="sidebar">
        <h1 class="text-center" style="color: #00cd5a;">Easy task</h1>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false" style="margin-top: 20px;">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>
                            Все задачи
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach ($events as $event)
                            <li class="nav-item">
                                <a href="{{ route('admin.event.show', $event->id) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ $event->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>
                            Мои задачи
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach ($myEvents as $event)
                            <li class="nav-item">
                                <a href="{{ route('admin.event.show', $event->id) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{ $event->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
