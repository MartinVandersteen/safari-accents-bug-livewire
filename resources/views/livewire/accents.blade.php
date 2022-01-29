<div> 
  <div>
    <h1>{{ $string }}</h1>
    <div>{{ $text }}</div>
    <div>
      <section>
        {{ $text }}
      </section>
    </div>
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
