<section id="hero" class="d-flex align-items-center mt">
                    <div class="container">
                        <div class="row">        
         <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                  
<div>
    <div class="card">
        <div class="card-header">
            Chat with {{ $reciever->name }}
        </div>
        <div class="card-body">
            <div style="overflow-y:auto; height:200px" id="chat-container">
                <div wire:poll>
                    @forelse($chats as $chat)
                    @if($chat->sender_id == $sender->id)
                    <div class="d-flex justify-content-end mb-4">
                            
                            <button class="btn float-left" wire:click="delete({{ $chat->id }})"><i class="fas fa-trash"></i></button>
                            <div class="msg_cotainer_send">
                                    {{ $chat->chat }}
                                    <span class="msg_time">{{ $chat->created_at->diffForHumans() }}</span>
                            </div>
                            
                            </div>
                                

                    @elseif($chat->reciever_id == $sender->id)
                    <div class="d-flex justify-content-start mb-4">                            
                                <div class="msg_cotainer">
                                    {{ $chat->chat }}                                    
                                <span class="msg_time">
                                    {{ $chat->created_at->diffForHumans() }}
                                </span>
                                
                                </div>
                            </div>
                    @endif
                    @empty
                    <div class="card bg-danger text-white mt-1">
                        <div class="card-body">
                        Chat is empty! Lets start chat 
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
            <br>
            <form action="" wire:submit.prevent="send">
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
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
                        <div class="col-2">
                            <a href="{{ route('dashboard.mentor-detail', ['user' => $reciever]) }}" class="btn btn-primary btn-block">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
    </div>
</div>
</section>
@section('script')
<script>
    const chat = document.getElementById("chat-container");
    function updateScroll(){
        chat.scrollTop = chat.scrollHeight;
    }
    updateScroll();

</script>
@endsection