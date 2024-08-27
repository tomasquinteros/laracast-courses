<?php

    namespace App\Policies;

    use Illuminate\Auth\Access\Response;
    use App\Models\Job;
    use App\Models\User;
    use phpDocumentor\Reflection\Types\Boolean;

    class JobPolicy
    {

        /**
         * Determine whether the user can view any models.
         */
        public function edit(Job $job, User $user): Boolean
        {
            return $job->employer->user->is($user);
        }

    }