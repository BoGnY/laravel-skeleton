<?php

declare(strict_types=1);

namespace App\Actions\Jetstream;

use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param mixed $user
     *
     * @return void
     */
    public function delete($user): void
    {
        $user->delete();
    }
}
