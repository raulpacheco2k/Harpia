<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit" class="dropdown-item">Sair</button>
</form>
