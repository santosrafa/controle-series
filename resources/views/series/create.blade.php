<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        {{-- Serve para evitar um ataque cross-site request forgery --}}
        @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
