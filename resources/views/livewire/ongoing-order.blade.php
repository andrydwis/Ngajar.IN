<div>
    <div class="row">
        <div class="container-fluid">
            <h1 class="h3 mb-0 text-gray-800">Pembelajaran</h1><br>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h1 class="m-0 font-weight-bold text-primary">Proses Pembelajaran</h1><br>
                                Anda sedang diajar
                                <br><br>

                                <div class="row">

                                    <!-- pengajar -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="card" style="width:400px">
                                                        @if($order->mentor->detail)
                                                        <img class="card-img-top" src="{{ asset('storage/' . $order->mentor->detail->photo) }}" alt="Card image" style="width:100%">
                                                        @endif
                                                        <div class="card-body">
                                                            <p class="card-text">{{ $order->mentor->name }}</p>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="main">
                                            <h4>Countdown Timer</h4>
                                            <div id="clock">
                                                <div><span id="days"></span>
                                                    <p>Hari</p>
                                                </div>
                                                <div><span id="hours"></span>
                                                    <p>Jam</p>
                                                </div>
                                                <div><span id="minutes"></span>
                                                    <p>Menit</p>
                                                </div>
                                                <div><span id="seconds"></span>
                                                    <p>Detik</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- mahasiswa -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="card" style="width:400px">
                                                        @if($order->client->detail)
                                                        <img class="card-img-top" src="{{ asset('storage/' . $order->mentor->client->photo) }}" alt="Card image" style="width:100%">
                                                        @endif
                                                        <div class="card-body">
                                                            <p class="card-text">{{ $order->client->name }}</p>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <a href="#" class="btn btn-primary">Stop</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script type="text/javascript">
    function animation(span) {
        span.className = "turn";
        setTimeout(function() {
            span.className = ""
        }, 700);
    }

    function Countdown() {

        setInterval(function() {

            var hari = document.getElementById("days");
            var jam = document.getElementById("hours");
            var menit = document.getElementById("minutes");
            var detik = document.getElementById("seconds");

            var deadline = new Date("Okt 25, 2020 23:59:59");
            var waktu = new Date();
            var distance = deadline - waktu;

            var days = Math.floor((distance / (1000 * 60 * 60 * 24)));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (days < 10) {
                days = '0' + days;
            }
            if (hours < 10) {
                hours = '0' + hours;
            }
            if (minutes < 10) {
                minutes = '0' + minutes;
            }
            if (seconds < 10) {
                seconds = '0' + seconds;
            }

            hari.innerHTML = days;
            jam.innerHTML = hours;
            menit.innerHTML = minutes;
            detik.innerHTML = seconds;
            //animation
            animation(detik);
            if (seconds == 0) animation(menit);
            if (minutes == 0) animation(jam);
            if (hours == 0) animation(hari);

        }, 1000);
    }

    Countdown();
</script>
@endsection