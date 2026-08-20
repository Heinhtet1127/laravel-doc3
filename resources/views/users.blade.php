<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Users</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="min-h-screen bg-gray-100 px-6 py-12 text-gray-900">
        <main class="mx-auto max-w-4xl">
            <div class="mb-6">
                <h1 class="text-3xl font-bold">Users</h1>
                <p class="mt-2 text-gray-600">{{ $users->count() }} users found.</p>
            </div>

            <div class="overflow-hidden rounded-lg bg-white shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500" scope="col">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500" scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse ($users as $user)
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $user->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-gray-600">{{ $user->email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-6 py-8 text-center text-gray-500" colspan="2">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>
