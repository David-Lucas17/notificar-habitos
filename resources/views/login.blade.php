<x-layout>
    <main class="py-10">

        <section class="bg-white mt-4 max-w-[600px] mx-auto p-10 border-2 rounded-lg">
            <h1 class="text-3xl font-bold">
                Faça seu login
            </h1>
            <p>
                Insira seus dados para acessar
            </p>

            <form action="/login" method="POST" class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="example@gmail.com" class="p-2 border-1 bg-[#F5F5F5] rounded-lg border-zinc-300 @error('email') border-red-500 @enderror">
                </div>

                @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <div class="flex flex-col gap-2 mb-2">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="******" class="p-2 border-1 bg-[#F5F5F5] rounded-lg border-zinc-300 @error('password') border-red-500 @enderror">
                </div>

                @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <button type="submit" class="bg-black text-white p-2">Login</button>
            </form>

        </section>
    </main>

</x-layout>
