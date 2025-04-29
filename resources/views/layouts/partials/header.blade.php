<!-- resources/views/layouts/partials/header.blade.php -->
<header>
    <nav>
        <ul>
            <li class="{{ request()->routeIs('www.home') ? 'active' : '' }}">
                <a href="{{ route('www.home') }}">메인</a>
            </li>
            <li class="{{ request()->routeIs('www.about') ? 'active' : '' }}">
                <a href="{{ route('www.about') }}">회사소개</a>
            </li>
            <li class="{{ request()->routeIs('www.contact') ? 'active' : '' }}">
                <a href="{{ route('www.contact') }}">문의하기</a>
            </li>
        </ul>
    </nav>
</header>
