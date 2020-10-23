<div>
    <div class="card">
        <div class="card-header">
            Chat dengan {{ $reciever->name }}
        </div>
        <div class="card-body">
            <div wire:poll>
                @forelse($chats as $chat)
                @if($chat->sender_id == $sender->id)
                <div class="card bg-success text-white mt-1">
                    <div class="card-body">
                        {{ $chat->chat }}
                    </div>
                </div>
                @elseif($chat->reciever_id == $sender->id)
                <div class="card bg-primary text-white mt-1">
                    <div class="card-body">
                        {{ $chat->chat }}
                    </div>
                </div>
                @endif
                @empty
                <div class="card bg-danger text-white mt-1">
                    <div class="card-body">
                        Chat masih kosong kayak hatimu kyaaa..  >.<
                    </div>
                </div>
                @endforelse
            </div>
            <br>
            <form action="" wire:submit.prevent="send">
                <div class="form-group">
                    <div class="row">
                        <div class="col-10">
                            <input type="text" class="form-control @error('chat_message') {{ 'is-invalid' }} @enderror" wire:model="chat_message">
                            @error('chat_message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @error('chat_message')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="col-2">
                            <button class="btn btn-success btn-block">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>