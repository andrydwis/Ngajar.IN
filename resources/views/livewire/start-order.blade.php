<div>
    @if($condition == 'start')
    <button class="btn btn-success" wire:click="start({{$order}})">Start</button>
    @else
    <button class="btn btn-warning">This session can be started / Already passed</button>
    @endif
</div>