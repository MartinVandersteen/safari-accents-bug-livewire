<div> 
  <div>
    <h1>{{ $string }}</h1>
    <img alt="{{ $text  }}" />
  </div>
  <div>{{ $number }}</div>
  <button wire:click="addNumber">Add number</button>

  <script>
    let object = {
      'item_name': '{{ $string }}',
      'item_id': '{{ $text }}',
      'item_id': '{{ $number }}',
    };
</script>
</div>
