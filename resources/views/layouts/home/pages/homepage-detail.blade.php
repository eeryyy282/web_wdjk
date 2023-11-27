@extends('layouts.home.layout.master')

@section('title', 'WDJK | Homepage')

@section('content')
<div class="row">
    <div class="col-4">
        <img src="{{ asset($shoe->foto) }}" class="img-fluid" alt="...">
    </div>
    <div class="col-4">
        <div class="fw-semibold">
            {{ $shoe->tipe }}
        </div>
        <div class="mt-2">{{ $shoe->terjual }} terjual • <i class="bi bi-star-fill" style="color: #FFAC33"></i> {{ $shoe->rating }}</div>
        <div class="mt-4 mb-4 fw-semibold fs-5">{{ "Rp " . number_format($shoe->harga, 0, ',', '.') }}</div>
        <div class="mt-4 mb-4 fw-medium">
            <div>Pilih Ukuran:</div>
            <!-- <input class="btn-check" type="radio" name="ukuran" value="40"> 40 -->
            <input type="radio" class="btn-check" name="ukuran" value="36" id="option1 success-outlined" autocomplete="off">
            <label class="btn btn-outline-success" for="option1 success-outlined">38</label>

            <input type="radio" class="btn-check" name="ukuran" value="37" id="option2 success-outlined" autocomplete="off">
            <label class="btn btn-outline-success" for="option2 success-outlined">39</label>

            <input type="radio" class="btn-check" name="ukuran" value="38" id="option3 success-outlined" autocomplete="off">
            <label class="btn btn-outline-success" for="option3 success-outlined">40</label>

            <input type="radio" class="btn-check" name="ukuran" value="39" id="option3 success-outlined" autocomplete="off">
            <label class="btn btn-outline-success" for="option3 success-outlined">41</label>

            <input type="radio" class="btn-check" name="ukuran" value="40" id="option4 success-outlined" autocomplete="off">
            <label class="btn btn-outline-success" for="option4 success-outlined">42</label>

            <input type="radio" class="btn-check" name="ukuran" value="41" id="option5 success-outlined" autocomplete="off">
            <label class="btn btn-outline-success" for="option5 success-outlined">43</label>

            <input type="radio" class="btn-check" name="ukuran" value="42" id="option6 success-outlined" autocomplete="off">
            <label class="btn btn-outline-success" for="option6 success-outlined">44</label>
        </div>
        <input type="text" id="tipe" class="invisible" value="{{ $shoe->tipe }}">
        <input type="text" id="merk" class="invisible" value="{{ $shoe->merk }}">
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="fw-semibold">Atur jumlah dan alamat</div>
                <hr>
                <input class="form-control w-25" type="number" value="1" id="harga" onchange="total()">
                <input type="text" class="form-control-plaintext" id="alamat" placeholder="Masukan alamat">
                <div class="mt-3">
                    <div class="row align-items-center">
                        <input type="text" class="form-control invisible" value="{{ Auth::user()->name }}" id="name">
                        <div class="col text-start">Total</div>
                        {{-- <div class="col fw-semibold fs-5 text-end" id="total" >Rp 250000</div> --}}
                        <input class="col fw-semibold fs-5 me-2 form-control-plaintext text-end" type="text" name="total_jumlah" id="total" size="7" value="{{ "Rp " . number_format($shoe->harga, 0, ',' , '.') }}" readonly>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn w-100 btnBeli" onclick="startWhatsAppChat()">Beli</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    {{-- Javascript Whatsapp --}}
    
    <script type="text/javascript">
		function total() {
		var valgoritma = {{ $shoe->harga }} * parseInt(document.getElementById('harga').value);

		var jumlah_harga = valgoritma;

		document.getElementById('total').value = 'Rp ' + jumlah_harga.toLocaleString('id-ID');
		}
    </script>

    <script>
        function startWhatsAppChat() {
            var phoneNumber = '6285701710446';
            var name = document.getElementById('name').value;
            var merk = document.getElementById('merk').value;
            var tipe = document.getElementById('tipe').value;
            var harga = document.getElementById('harga').value;
            var ukuranRadios = document.getElementsByName('ukuran');
            var alamat = document.getElementById('alamat').value;
            var bayar = document.getElementById('total').value;
            var selectedUkuran = "";
            for (var i = 0; i < ukuranRadios.length; i++) {
                if (ukuranRadios[i].checked) {
                    selectedUkuran = ukuranRadios[i].value;
                    break;
                }
            }

            var message = "Nama Pembeli: " + name + "\nMerk: " + merk + "\nTipe: " + tipe + "\nUkuran: " + selectedUkuran + "\nJumlah barang: " + harga + "\nAlamat: " + alamat + "\nTotal harga: " + bayar;
            var encodedMessage = encodeURIComponent(message);
            var whatsappLink = 'https://wa.me/' + phoneNumber + '?text=' + encodedMessage;

            window.open(whatsappLink);
        }
    </script>
@endsection