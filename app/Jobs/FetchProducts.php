<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\Product;

class FetchProducts implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $http = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => env('WLNT_TOKEN')
        ])->get(env('WLNT_BACKEND_ENDPOINT') . '/api/v1/store/' . env('STORE_ID') . '/products', [
            'type' => 'subscription',
        ]);

        if ($http->failed()) {
            return;
        }

        $products = collect($http->json()['products'])->where('type', 'subscription')->where('active', true)->where('archived', false)->map(function ($item) {
            return [
                '_id' => $item['_id'],
                'storeId' => $item['storeId'],
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'image' => $item['picture'],
                'interval' => str_contains(strtolower($item['name']), 'jaar') || str_contains(strtolower($item['description']), 'jaar') ? 'jaar' : 'maand',
                'btw' => $item['btw'],
                'availability_duration' => $item['availableUntil'] != '01-01-1970 00:00' && $item['availableFrom'] != '01-01-1970 00:00' ? true : false,
                'available_from' => null, // $item['availableFrom'] != '01-01-1970 00:00' ? Carbon::parse($item['availableFrom'])->format('d-m-Y H:i') : null,
                'available_until' => null, // $item['availableUntil'] != '01-01-1970 00:00' ? Carbon::parse($item['availableUntil'])->format('d-m-Y H:i') : null,
                'zakelijk' => str_contains(strtolower($item['name']), 'zakelijk') ?? false,
            ];
        });
        // upsert the products
        Product::upsert($products->toArray(), ['_id'], ['storeId', 'interval', 'zakelijk', 'name', 'description', 'image', 'price', 'btw', 'availability_duration', 'available_from', 'available_until']);
    }
}
