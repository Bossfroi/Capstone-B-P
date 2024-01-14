<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 sm:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="container mx-auto">
                        <table class="w-full bg-white border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">ID</th>
                                    <th class="py-2 px-4 border-b">Full name</th>
                                    <th class="py-2 px-4 border-b">Email Address</th>
                                    <th class="py-2 px-4 border-b">Phone Number</th>
                                    <th class="py-2 px-4 border-b">No. persons</th>
                                    <th class="py-2 px-4 border-b">Date</th>
                                    <th class="py-2 px-4 border-b">Time</th>
                                    <th class="py-2 px-4 border-b">Special Request</th>
                                    <th>Signed</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                    <tr>
                                        <td class="py-2 px-4 border-b text-center">{{ $reservation->id }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $reservation->name }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $reservation->email }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $reservation->phone }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $reservation->people }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $reservation->date }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $reservation->time }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $reservation->message }}</td>
                                        <td>
                                            <form action="{{ route('accept.reservation', $reservation->id ) }}" class=" justify-between text-center" method="POST">
                                                @csrf
                                                @if($reservation->avail == 3)
                                                    <p class=" text-center" value='4' name='avail'>
                                                        Signed on
                                                        </p>
                                                        <p class="text-center">{{ $reservation->condo_unit }}</p>
                                                        <hr>
                                                    @elseif($reservation->avail == 2)
                                                    <select name='condo_unit' id="condo_unit">
                                                         <option  value='unitA_grond'>UNIT A Grnd FLR</option>
                                                         <option  value='unitB_grond'>UNIT B Grnd FLR</option>
                                                         <option  value='unitC_grond'>UNIT C Grnd FLR</option>
                                                         <option  value='unitD_grond'>UNIT D Grnd FLR</option>
                                                         <option  value='unitE_grond'>UNIT E Grnd FLR</option>
                                                         <option  value='unitF_grond'>UNIT F Grnd FLR</option>
                                                         <option  value='unitA_2nd'>UNIT A 2ND FLR</option>
                                                         <option  value='unitB_2nd'>UNIT B 2ND FLR</option>
                                                         <option  value='unitC_2nd'>UNIT C 2ND FLR</option>
                                                         <option  value='unitD_2nd'>UNIT D 2ND FLR</option>
                                                         <option  value='unitE_2nd'>UNIT E 2ND FLR</option>
                                                         <option  value='unitF_2nd'>UNIT F 2ND FLR</option>
                                                         <option  value='unitA_3rd'>UNIT A 3RD FLR</option>
                                                         <option  value='unitB_3rd'>UNIT B 3RD FLR</option>
                                                         <option  value='unitC_3rd'>UNIT C 3RD FLR</option>
                                                         <option  value='unitD_3rd'>UNIT D 3RD FLR</option>
                                                         <option  value='unitE_3rd'>UNIT E 3RD FLR</option>
                                                         <option  value='unitF_3rd'>UNIT F 3RD FLR</option>
                                                         <option  value='unitA_4th'>UNIT A 4TH FLR</option>
                                                         <option  value='unitB_4th'>UNIT B 4TH FLR</option>
                                                         <option  value='unitC_4th'>UNIT C 4TH FLR</option>
                                                         <option  value='unitD_4th'>UNIT D 4TH FLR</option>
                                                         <option  value='unitE_4th'>UNIT E 4TH FLR</option>
                                                         <option  value='unitF_4th'>UNIT F 4TH FLR</option>
                                                         <option  value='unitA_5th'>UNIT A 5TH FLR</option>
                                                         <option  value='unitB_5th'>UNIT B 5TH FLR</option>
                                                         <option  value='unitC_5th'>UNIT C 5TH FLR</option>
                                                         <option  value='unitD_5th'>UNIT D 5TH FLR</option>
                                                         <option  value='unitE_5th'>UNIT E 5TH FLR</option>
                                                         <option  value='unitF_5th'>UNIT F 5TH FLR</option>
                                                         <option  value='unitA_6th'>UNIT A 6TH FLR</option>
                                                         <option  value='unitB_6th'>UNIT B 6TH FLR</option>
                                                         <option  value='unitC_6th'>UNIT C 6TH FLR</option>
                                                         <option  value='unitD_6th'>UNIT D 6TH FLR</option>
                                                         <option  value='unitE_6th'>UNIT E 6TH FLR</option>
                                                         <option  value='unitF_6th'>UNIT F 6TH FLR</option>
                                                         <option  value='unitA_7th'>UNIT A 7TH FLR</option>
                                                         <option  value='unitB_7th'>UNIT B 7TH FLR</option>
                                                         <option  value='unitC_7th'>UNIT C 7TH FLR</option>
                                                         <option  value='unitD_7th'>UNIT D 7TH FLR</option>
                                                         <option  value='unitE_7th'>UNIT E 7TH FLR</option>
                                                         <option  value='unitF_7th'>UNIT F 7TH FLR</option>
                                                         <option  value='unitA_8th'>UNIT A 8TH FLR</option>
                                                         <option  value='unitB_8th'>UNIT B 8TH FLR</option>
                                                         <option  value='unitC_8th'>UNIT C 8TH FLR</option>
                                                         <option  value='unitD_8th'>UNIT D 8TH FLR</option>
                                                         <option  value='unitE_8th'>UNIT E 8TH FLR</option>
                                                         <option  value='unitF_8th'>UNIT F 8TH FLR</option>
                                                         <option  value='unitA_9th'>UNIT A 9TH FLR</option>
                                                         <option  value='unitB_9th'>UNIT B 9TH FLR</option>
                                                         <option  value='unitC_9th'>UNIT C 9TH FLR</option>
                                                         <option  value='unitD_9th'>UNIT D 9TH FLR</option>
                                                         <option  value='unitE_9th'>UNIT E 9TH FLR</option>
                                                         <option  value='unitF_9th'>UNIT F 9TH FLR</option>
                                                         <option  value='commercialU1'>COMMERCIAL U1</option>
                                                         <option  value='commercialU2'>COMMERCIAL U2</option>
                                                         <option  value='commercialU3'>COMMERCIAL U3</option>
                                                         <option  value='commercialU4'>COMMERCIAL U4</option>          
                                                      </select>
                                                      
                                                    <x-button type="submit" class="bg-green-500 text-white text-center"  value='3' name='avail'>
                                                         SUBMIT
                                                    </x-button> 
                                                @elseif($reservation->avail == 1)
                                                    <x-button type="submit" class="bg-yellow-500 text-white text-center " value='2' name='avail'>
                                                        - Process
                                                    </x-button>
                                                    <x-button type="submit" class="bg-red-500 text-white text-center" value='5' name='avail'>
                                                        - CANCEL
                                                    </x-button>
                                                    @elseif($reservation->avail == 5)
                                                    <p class=" justify-between text-center" value='4' name='avail'>
                                                        CANCEL
                                                        </p>
                                                @else
                                                <x-button type="submit" class="bg-green-500 text-white text-center" value='1' name='avail'>
                                                    ACCEPT
                                                </x-button>
                                                @endif

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
