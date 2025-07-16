@extends('layouts.app')

@section('content')
<div class="w-full max-w-md mx-auto mt-10">
    <div class="bg-[#0F172A] rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">
            Seller Registration
        </h2>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register.seller') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Company Name</label>
                <input name="company_name" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Email</label>
                <input name="email" type="email" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Country</label>
                <select id="country" name="country" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-[#2563EB]" required>
                    <option value="" disabled selected>Select your country</option>
                    @foreach([
                        'Afghanistan','Albania','Algeria','Andorra','Angola','Antigua and Barbuda','Argentina',
                        'Armenia','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados',
                        'Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana',
                        'Brazil','Brunei','Bulgaria','Burkina Faso','Burundi','Cabo Verde','Cambodia','Cameroon',
                        'Canada','Central African Republic','Chad','Chile','China','Colombia','Comoros',
                        'Congo (Congo-Brazzaville)','Costa Rica','Croatia','Cuba','Cyprus','Czechia (Czech Republic)',
                        'Democratic Republic of the Congo','Denmark','Djibouti','Dominica','Dominican Republic',
                        'Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Eswatini','Ethiopia',
                        'Fiji','Finland','France','Gabon','Gambia','Georgia','Germany','Ghana','Greece','Grenada',
                        'Guatemala','Guinea','Guinea-Bissau','Guyana','Haiti','Honduras','Hungary','Iceland','India',
                        'Indonesia','Iran','Iraq','Ireland','Israel','Italy','Jamaica','Japan','Jordan','Kazakhstan',
                        'Kenya','Kiribati','Kuwait','Kyrgyzstan','Laos','Latvia','Lebanon','Lesotho','Liberia','Libya',
                        'Liechtenstein','Lithuania','Luxembourg','Madagascar','Malawi','Malaysia','Maldives','Mali',
                        'Malta','Marshall Islands','Mauritania','Mauritius','Mexico','Micronesia','Moldova','Monaco',
                        'Mongolia','Montenegro','Morocco','Mozambique','Myanmar','Namibia','Nauru','Nepal',
                        'Netherlands','New Zealand','Nicaragua','Niger','Nigeria','North Korea','North Macedonia',
                        'Norway','Oman','Pakistan','Palau','Palestine','Panama','Papua New Guinea','Paraguay',
                        'Peru','Philippines','Poland','Portugal','Qatar','Romania','Russia','Rwanda',
                        'Saint Kitts and Nevis','Saint Lucia','Saint Vincent and the Grenadines','Samoa','San Marino',
                        'Sao Tome and Principe','Saudi Arabia','Senegal','Serbia','Seychelles','Sierra Leone',
                        'Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','South Korea',
                        'South Sudan','Spain','Sri Lanka','Sudan','Suriname','Sweden','Switzerland','Syria','Taiwan',
                        'Tajikistan','Tanzania','Thailand','Timor-Leste','Togo','Tonga','Trinidad and Tobago',
                        'Tunisia','Turkey','Turkmenistan','Tuvalu','Uganda','Ukraine','United Arab Emirates',
                        'United Kingdom','United States','Uruguay','Uzbekistan','Vanuatu','Vatican City','Venezuela',
                        'Vietnam','Yemen','Zambia','Zimbabwe'
                    ] as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Phone (+ Country Code)</label>
                <input name="phone" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-medium">Password</label>
                <input name="password" type="password" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-300 font-medium">Confirm Password</label>
                <input name="password_confirmation" type="password" class="mt-1 w-full px-4 py-2 border border-[#2563EB] rounded focus:outline-none focus:ring-2 focus:ring-[#2563EB] bg-gray-800 text-white" required>
            </div>

            <button class="w-full bg-[#2563EB] hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
                Register as Seller
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-400">
            Already have an account?<br>
            <a href="{{ route('login') }}" class="text-[#2563EB] font-semibold hover:underline">Login</a>
        </div>
    </div>
</div>
@endsection
