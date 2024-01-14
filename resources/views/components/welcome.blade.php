<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />
        <div class="container mx-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Full name</th>
                        <th class="py-2 px-4 border-b">Email Address</th>
                        <th class="py-2 px-4 border-b">Phone Number</th>
                        <th class="py-2 px-4 border-b">Number of persons</th>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Time</th>
                        <th class="py-2 px-4 border-b">Special Request</th>
                        <th>Signed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">Sidmer Froi sandoval</td>
                        <td class="py-2 px-4 border-b">froisidmer@gmail.com</td>
                        <td class="py-2 px-4 border-b">09917290295</td>
                        <td class="py-2 px-4 border-b">2</td>
                        <td class="py-2 px-4 border-b">2023-01-01</td>
                        <td class="py-2 px-4 border-b">7PM</td>
                        <td class="py-2 px-4 border-b">none</td>
                        <td>
                            <x-button class="sm-4 bg-green-500 text-white">
                                {{ __('accept') }}
                            </x-button>

                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
