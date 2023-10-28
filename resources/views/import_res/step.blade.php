HYAhdjasjdlksajkldasjldsa

<br>
<br>
<br>
<br>

{{ $edital }}


<br>
<br>
<br>
<br>

<div class="container mx-auto">

    <form action="{{ route('importarRes.importacaoAAAAA') }}" method="post" enctype="multipart/form-data">
        @csrf
        {{-- {{ csrf_field() }} --}}


        <input type="text" name="textD">
        <input type="hidden" name="edital" value="{{ $edital }}">

        <button type="submit">Aasdasdsa</button>



    </form>
</div>
