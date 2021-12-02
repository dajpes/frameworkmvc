<form method="POST" action="" {{ $attributes }}>
    @csrf
    {{ $slot }}
</form>
