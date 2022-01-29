<div>
  @foreach ($array as $string)  
    <span>{{ $string }}</span>
  @endforeach
  <button wire:click="toggleWhatever">{{ $whatever ? 'true' : 'false' }}</button>
</div>
