<div>
    <form>
        <h1>Title: {{ $title }}</h1>
        <label for="title">Title:</label>
        <input type="text" id="title" wire:model.live="title">
    </form>
</div>
