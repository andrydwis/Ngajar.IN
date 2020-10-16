<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">

                    <h2 class="m-0 font-weight-bold text-primary">Request Form</h2><br>
                    The styling for this basic card example is created by using default Bootstrap utility classes. By using utility classes, the style of the card component can be easily modified with no need for any custom CSS!

                    <br><br>

                    <form class="user" action="{{ route('dashboard.order-request') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="mentor_id" value="{{ $user->id }}">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Day
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($dates as $date => $id)
                                <button type="button" class="dropdown-item" wire:click="getSchedule('{{ $date }}', {{ $id }})">{{ $date }}</button>
                                @endforeach
                            </div>
                            @error('day')

                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="day">Selected day</label>
                            <input type="text" class="form-control form-control-user @error('day') {{ 'is-invalid' }} @enderror" name="day" value="{{ $date_select }}" readonly>
                            @error('day')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hour_start">Hour Start</label>
                            <input type="time" class="form-control form-control-user @error('hour_start') {{ 'is-invalid' }} @enderror" name="hour_start" wire:model="hour_start" value="{{ old('hour_start') ?? '' }}" min="{{ $min ?? '' }}" max="{{ $max ?? '' }}">
                            @error('hour_start')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hour_start">Hour End</label>
                            <input type="time" class="form-control form-control-user @error('hour_end') {{ 'is-invalid' }} @enderror" name="hour_end" wire:model="hour_end" value="{{ old('hour_end') ?? '' }}" min="{{ $min ?? '' }}" max="{{ $max ?? '' }}">
                            @error('hour_end')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="duration">Duration <b>(in minutes)</b></label>
                                    <input type="text" class="form-control form-control-user" readonly value="{{ $duration }}">
                                </div>
                                <div class="col">
                                    <label for="duration">Fee</label>
                                    <button type="button" class="btn btn-primary btn-sm" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        ?
                                    </button>
                                    <input type="text" class="form-control form-control-user" readonly value="{{ $fee }}">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-user" type="submit">Reqest</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
