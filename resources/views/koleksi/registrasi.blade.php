<x-guest-layout>
    <form method="POST" action="{{ route('koleksiStore') }}">
        @csrf
        // Nama: Fauzan Ramadhana Sadikin
        // Nim: 6706220054
        // Kelas: D3IF 4603
        <!-- Nama Koleksi -->
        <div class="mt-4">
            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />
            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi"
                :value="old('namaKoleksi')" required autofocus />
            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
        </div>

        <!-- Jenis Koleksi -->
        <div class="mt-4">
            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
            <div class="flex items-center">
                <input class=" mr-2 leading-tight" type="radio" id="buku" name="jenisKoleksi" value="1"
                    {{ old('jenisKoleksi')=== '1' ? 'checked' : ''}} required autofocus />
                <label class="text-white ml-2" for="buku">
                    Buku
                </label>
            </div>

            <div class="flex items-center">
                <input class=" mr-2 leading-tight" type="radio" id="majalah" name="jenisKoleksi" value="2"
                    {{ old('jenisKoleksi')=== '2' ? 'checked' : ''}} required autofocus />
                <label class="text-white ml-2" for="majalah">
                    Majalah
                </label>
            </div>

            <div class="flex items-center">
                <input class=" mr-2 leading-tight" type="radio" id="cakramDigital" name="jenisKoleksi" value="3"
                    {{ old('jenisKoleksi')=== '3' ? 'checked' : ''}} required autofocus />
                <label class="text-white ml-2" for="cakramDigital">
                    Cakram Digital
                </label>
            </div>
            <x-input-error :messages=" $errors->get('jenisKoleksi')" class="mt-2" />
        </div>

        <!-- Jumlah Koleksi -->
        <div class="mt-4">
            <x-input-label for="jumlahKoleksi" :value="__('Jumlah Koleksi')" />
            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi"
                :value="old('jumlahKoleksi')" required autofocus />
            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
        </div>

        <!-- Nama Pengarang -->
        <div class="mt-4">
            <x-input-label for="namaPengarang" :value="__('Nama Pengarang')" />
            <x-text-input id="namaPengarang" class="block mt-1 w-full" type="text" name="namaPengarang"
                :value="old('namaPengarang')" required autocomplete="namaPengarang" />
            <x-input-error :messages="$errors->get('namaPengarang')" class="mt-2" />
        </div>

        <!-- Nama Penerbit -->
        <div class="mt-4">
            <x-input-label for="namaPenerbit" :value="__('Nama Penerbit')" />
            <x-text-input id="namaPenerbit" class="block mt-1 w-full" type="text" name="namaPenerbit"
                :value="old('namaPenerbit')" required autocomplete="namaPenerbit" />
            <x-input-error :messages="$errors->get('namaPenerbit')" class="mt-2" />
        </div>

        <!-- Tahun Terbit -->
        <div class="mt-4">
            <x-input-label for="tahunTerbit" :value="__('Tahun Terbit')" />
            <x-text-input id="tahunTerbit" class="block mt-1 w-full" type="number" name="tahunTerbit"
                :value="old('tahunTerbit')" required autofocus />
            <x-input-error :messages="$errors->get('tahunTerbit')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>