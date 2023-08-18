<div class="sidebar">
    <a class="{{ request()->routeIs('home', 'todo.show', 'todo.edit') ? 'active' : '' }}" href="{{ route('home') }}">Todo Lists</a>
    <a class="{{ request()->routeIs('todo.create') ? 'active' : '' }}" href="{{ route('todo.create') }}">Create Todo</a>
    <a class="{{ request()->routeIs('inheritance') ? 'active' : '' }}" href="{{ route('inheritance') }}">Inheritance</a>
    <a class="{{ request()->routeIs('interface') ? 'active' : '' }}" href="{{ route('interface') }}">Interface</a>
    <a class="{{ request()->routeIs('encapsulation') ? 'active' : '' }}" href="{{ route('encapsulation') }}">Encapsulation</a>
    <a class="{{ request()->routeIs('polymorphism') ? 'active' : '' }}" href="{{ route('polymorphism') }}">Polymorphism</a>
</div>
