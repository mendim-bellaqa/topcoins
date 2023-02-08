
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Top Gainers</title>
        <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        
        @foreach ($coins as $coin)
        <div class="relative flex  flex-col jus items-center justify-center overflow-hidden bg-black p-6 sm:py-12">
        
        <div class="bg-teal-800	 text-white  shadow-xl shadow-gray-100 w-full max-w-4xl flex flex-col sm:flex-row gap-3 sm:items-center  justify-between px-5 py-4 rounded-md">
          <div>
          <span class="text-white-800  text-sm">{{ $coin['rank'] }}</span>

          <div class="w-5"><img src="{{ $coin['image'] }}" alt="Coin Image"></div>

            <span class="text-white-800 font-bold text-sm">Rank Market Cap - {{ $coin['market_cap_rank'] }}</span>
            <h3 class="font-bold mt-px">{{ $coin['name'] }} 

            </h3>
            <div class="flex items-center  gap-3 mt-2">
            </svg> $ {{ $coin['current_price'] }}</span>
              <span class="bg-purple-100 text-green-700 border-black border-4 font-bold rounded-full px-3 py-1 text-sm"> % {{ $coin['price_change_percentage_24h'] }}</span>
            </div>
          </div>
          <div>
            <button class="bg-purple-900 text-white font-medium px-4 py-2 border-white  border-2 rounded-md flex gap-1 items-center">More Info <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
        </svg>
        </svg>
        </button>
          </div>
            </div>
        </div>

        @endforeach
    </body>
</html>




