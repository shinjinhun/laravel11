<?php

    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Tests\TestCase;
    use App\Models\User;

    class UserTest extends TestCase
    {
        use RefreshDatabase;

        public function test_user_can_be_created()
        {
            $user = User::create([
                'name' => '홍길동',
                'email' => 'hong@example.com',
                'password' => bcrypt('password'),
            ]);

            $this->assertDatabaseHas('users', [
                'email' => 'hong@example.com',
            ]);
        }

        public function test_user_can_be_updated()
        {
            $user = User::factory()->create([
                'name' => '홍길동',
            ]);

            $user->update(['name' => '김철수']);

            $this->assertDatabaseHas('users', [
                'id' => $user->id,
                'name' => '김철수',
            ]);
        }

        public function test_user_can_be_deleted()
        {
            $user = User::factory()->create();

            $user->delete();

            $this->assertDatabaseMissing('users', [
                'id' => $user->id,
            ]);
        }
    }
