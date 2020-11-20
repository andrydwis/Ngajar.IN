<div>
    @if($condition == 'pay')
    <form action="" method="post" wire:submit.prevent="pay({{ $order }})">
        <button type="submit" class="btn btn-primary">Pay</button>
    </form>
    @elseif($condition == 'ongoing')
    <form action="" method="post" wire:submit.prevent="pay({{ $order }})">
        <button type="submit" class="btn btn-primary">Pay</button>
    </form>
    <button class="btn btn-warning">Do payment immediately</button>
    @elseif($condition == 'over')
    <button class="btn btn-secondary">Order expired, payment not done</button>
    @endif
</div>