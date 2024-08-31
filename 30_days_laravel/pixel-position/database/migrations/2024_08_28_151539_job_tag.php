<?php

    use App\Models\Job;
    use App\Models\Tag;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {

        /**
         * Run the migrations.
         */
        public function up(): void
        {
            //
            Schema::create('job_tag', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Job::class, 'job_id')->constrained()->cascadeOnDelete();
                $table->foreignIdFor(Tag::class, 'tag_id')->constrained()->cascadeOnDelete();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            //
            Schema::dropIfExists('tag_job');
        }

    };