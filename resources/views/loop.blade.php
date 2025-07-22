{{-- <ul> 
@for($i=1; $i<=10; $i++)
 <li>{{ $i }}</li>
@endfor 

</ul> --}}

<ul>
     @foreach ( $users as $user)
        <li>My name is a {{ $user['name'] }} and {{ $user['age'] }} years old </li> 
     @endforeach
</ul>