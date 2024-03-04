    {{-- Panggil file jquery untuk proses reatime --}}
    <script type="text/javascript" src="{{ asset('jquery/jquery.min.js') }}"></script>

    {{-- ajax untuk realtime --}}
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#suhu").load("{{ url('bacasuhu') }}");
                $("#kelembapan").load("{{ url('bacakelembapan') }}");
                $("#kipas").load("{{ url('bacakipas') }}");
                $("#humidifier").load("{{ url('bacahumidifier') }}");
            }, 1000);
        });
    </script>
