<div>
    @if($condition == 'waiting')
    <button class="btn btn-warning">Wait</button>
    @elseif($condition == 'over')
    <form action="" method="post" wire:submit.prevent="cancel({{ $order }})">
        <button type="submit" class="btn btn-danger">Cancel</button>
    </form>
    @endif
</div>