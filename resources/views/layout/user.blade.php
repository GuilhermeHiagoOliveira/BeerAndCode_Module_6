<span>{{ $user['name'] }}</span>

@pushOnce('scripts')
    <script>
        console.log('User script 2');
    </script>
@endpushOnce

@prependonce('scripts')
    <script>
        console.log('User script 1');
    </script>
@endprependonce
