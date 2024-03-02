<h1>FORM GET</h1>
<form action="/submit" method="get">
    <input type="number" name="id">
    <button type="submit">Submete</button>
</form>

<h2>FORM POST</h2>

<form action="/submit" method="post">
    @csrf
    <input type="number" name="id">
    <button type="submit">Submete</button>
</form>

<a href="/redirect">Vizita Home Laravel</a>
