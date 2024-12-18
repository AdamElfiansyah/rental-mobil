<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts(): array
=======
<<<<<<< HEAD
    public function hosts(): array
=======
<<<<<<< HEAD
    public function hosts(): array
=======
    public function hosts()
>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
