<div>
    @if($condition == 'start')
    <button class="btn btn-success" wire:click="start({{$order}})">Start</button>
    @elseif($condition == 'wait')
    <button class="btn btn-warning">mohon tunggu sesuai jadwal</button>
    @elseif($condition == 'ongoing')
    <button class="btn btn-warning">sesi belajar sedang berlangsung nich</button>
    @elseif($condition == 'over')
    <button class="btn btn-secondary">sesi belajar dah kelar</button>
    @endif
</div>