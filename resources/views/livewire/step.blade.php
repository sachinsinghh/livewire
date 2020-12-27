<div>
    <h4>Click here to create more input</h4><button wire:click="increment" type="button">+</button>
  <br/>
  <div class="col-3">

  {{ count($steps) }}
      @foreach ($steps as $key=>$value)
      <input type="text"  name="address[{{ $key }}]" placeholder={{$value }}  /> <span wire:click="decrement({{$key}})">Remove</span> <br/>
      <br/>
      @endforeach


  </div>
</div>
