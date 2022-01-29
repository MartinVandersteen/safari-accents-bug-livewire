<div>
  @foreach ($whatever as $string)  
    <div>{{ $string }}</div>
  @endforeach
  <button wire:click="addWhatever">Do something</button>
</div>
