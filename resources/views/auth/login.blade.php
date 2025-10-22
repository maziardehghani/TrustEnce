<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ورود</title>
    <!-- Tailwind CDN for quick demo -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center font-sans">
<div class="w-full max-w-md p-8 bg-white rounded-2xl shadow">
    <h1 class="text-2xl font-semibold mb-6 text-center">ورود به حساب</h1>

    @if(session('status'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('status') }}</div>
    @endif

    @if($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 p-3 rounded mb-4">
            <ul class="list-disc mr-4">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label class="block mb-2">ایمیل</label>
        <input type="email" name="email" value="{{ old('email') }}" required autofocus
               class="w-full p-3 mb-4 border rounded focus:outline-none focus:ring"/>

        <label class="block mb-2">رمز عبور</label>
        <input type="password" name="password" required
               class="w-full p-3 mb-4 border rounded focus:outline-none focus:ring"/>


        <button type="submit" class="w-full py-3 rounded bg-blue-600 text-white font-medium hover:opacity-95">ورود
        </button>
    </form>

</div>
</body>
</html>


