<h4>Teste processo em fila usando Laravel</h4>
<div class="container mx-auto">
    <form action="{{ route('QueuePost.cadastro') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo"><br>
        <label for="mensagem">Mensagem</label>
        <input type="text" name="mensagem"><br>
        <button type="submit">Enviar</button>
    </form>
</div>