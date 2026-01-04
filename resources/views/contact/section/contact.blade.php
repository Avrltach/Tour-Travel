<section class="bg-white dark:bg-gray-900 py-20" style="font-family: 'Montserrat', sans-serif;">
    <div class="max-w-screen-xl mx-auto px-6 md:px-12 lg:px-16 grid grid-cols-1 md:grid-cols-2 gap-16">

        {{-- INFO KONTAK --}}
        <div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6">
                Hubungi Kami
            </h2>
            <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-10">
                Kami siap membantu Anda. Silakan hubungi kami melalui kontak di bawah ini
                atau kirimkan pesan melalui form yang tersedia.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="flex items-start gap-4">
                    <div class="p-4 rounded-2xl shadow-md text-white text-2xl"
                        style="background: linear-gradient(to right, #1FE4F9, #085E95);">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-xl text-gray-900 dark:text-white">Telepon</h4>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            0822-2115-5172 <br> 0812-2827-6626
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="p-4 rounded-2xl shadow-md text-white text-2xl"
                        style="background: linear-gradient(to right, #1FE4F9, #085E95);">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-xl text-gray-900 dark:text-white">Email</h4>
                        <p class="text-gray-600 dark:text-gray-300">ccopwt.id@gmail.com</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="p-4 rounded-2xl shadow-md text-white text-2xl"
                        style="background: linear-gradient(to right, #1FE4F9, #085E95);">
                        <i class="fa-solid fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-xl text-gray-900 dark:text-white">Alamat</h4>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Perum. Bukit Mas Residence, Blok C14, Karangklesem,  
                            Purwokerto Selatan – Banyumas (53143)
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="p-4 rounded-2xl shadow-md text-white text-2xl"
                        style="background: linear-gradient(to right, #1FE4F9, #085E95);">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-xl text-gray-900 dark:text-white">Instagram</h4>
                        <p class="text-gray-600 dark:text-gray-300">@cakrawala.travel</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#F5FAFF] dark:bg-gray-800 p-10 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700">

            {{-- SUCCESS --}}
            @if(session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            {{-- ERROR --}}
            @if ($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-red-100 text-red-700">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Nama"
                    required
                    class="p-4 rounded-lg border border-gray-300 w-full text-gray-700
                           outline-none focus:ring-2 focus:ring-blue-400 transition
                           dark:bg-gray-700 dark:text-white">

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Email"
                    required
                    class="p-4 rounded-lg border border-gray-300 w-full text-gray-700
                           outline-none focus:ring-2 focus:ring-blue-400 transition
                           dark:bg-gray-700 dark:text-white">

                <input
                    type="text"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="No Telepon"
                    class="p-4 rounded-lg border border-gray-300 w-full text-gray-700
                           outline-none focus:ring-2 focus:ring-blue-400 transition
                           dark:bg-gray-700 dark:text-white">

                <textarea
                    name="message"
                    rows="5"
                    required
                    placeholder="Pesan Anda"
                    class="p-4 rounded-lg border border-gray-300 w-full text-gray-700
                           outline-none focus:ring-2 focus:ring-blue-400 transition
                           dark:bg-gray-700 dark:text-white">{{ old('message') }}</textarea>

                <button
                    type="submit"
                    class="w-full text-white py-4 px-10 rounded-lg font-semibold text-lg shadow-md transition"
                    style="background: linear-gradient(to right, #1FE4F9, #085E95);">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>
