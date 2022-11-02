<h1>Tölts ki a mezőket</h1>
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{ $error }}
    </li>


    @endforeach
</ul>
@endif

<form action="book" method="post">
    {{ csrf_field() }}
    <p>
        <label for=""> Könyv címe: </label>
        <input type="text" name="name" placeholder="könyv neve">
    </p>
    <p>
        <label for=""> Ár: </label>
        <input type="text" name="price" placeholder="ár">
    </p>
    <p>
        <label for=""> Típus</label>
        <input type="text" name="type" placeholder="típus">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>