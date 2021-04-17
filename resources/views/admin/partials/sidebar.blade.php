<li class="nav-item has-treeview{{ $target === 'dashboards' ? ' menu-open' : ''}}">
    <a href="{{route("admin.dashboards.main")}}" class="nav-link{{ $target === 'dashboards' ? ' active' : ''}}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
           Инструменты сайта
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route("admin.dashboards.main")}}"
               class="nav-link{{ $dashboards === 'main' ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    Основные
                    @if($newMainEvents > 0)
                        <span class="badge badge-warning right">{{ $newMainEvents }}</span>
                    @endif
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route("admin.dashboards.seo")}}"
               class="nav-link{{ $dashboards === 'seo' ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                   Сео
                    @if($newSeoEvents > 0)
                        <span class="badge badge-warning right">{{ $newSeoEvents }}</span>
                    @endif
                </p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{ route('admin.users.index') }}"
       class="nav-link{{ $target === 'users' ? ' active' : ''}}">
        <i class="nav-icon fas  fa-users"></i>
        <p>Пользователи</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.categories.index') }}"
       class="nav-link{{ $target === 'categories' ? ' active' : ''}}">
        <i class="nav-icon fas fa-sitemap"></i>
        <p>Категории</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.news.index') }}"
       class="nav-link{{ $target === 'news' ? ' active' : ''}}">
        <i class="nav-icon fas  fa-newspaper"></i>
        <p>Новости</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.articles.index') }}"
       class="nav-link{{ $target === 'articles' ? ' active' : ''}}">
        <i class="nav-icon fas fa-sitemap"></i>
        <p>Статьи</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.comments.index') }}"
       class="nav-link{{ $target === 'сomments' ? ' active' : ''}}">
        <i class="nav-icon fas fa-comments"></i>
        <p>Комментарии</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.settings.index') }}"
       class="nav-link{{ $target === 'articles' ? ' active' : ''}}">
        <i class="nav-icon fas fa-cog"></i>
        <p>Статьи</p>
    </a>
</li>
@can('super-admin')

@endcan