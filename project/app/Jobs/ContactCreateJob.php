<?php

namespace App\Jobs;

use App\Models\Contact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ContactCreateJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public array $data)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Contact::create($this->data);
    }
}
