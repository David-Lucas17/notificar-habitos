
<h1>Beleza patrão</h1>

<p>
    Olá {{ $name}}!
</p>

<p>
    Esses são seus habitos:
</p>

<ul>
    @foreach ($habitos as $habito)
        <li>
            {{ $habito }}
        </li>
    @endforeach
</ul>

