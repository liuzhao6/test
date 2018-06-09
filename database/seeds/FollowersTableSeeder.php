<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = User::all();
        $user = User::first();
        // 获取去除掉 ID 为 1 的所有用户 ID 数组
        $user_id = $user->id;
        // 获取去除掉 ID 为 1 的所有用户 ID 数组
        $followers = $users->slice(1);
        $followers_ids = $followers->pluck('id')->toArray();

        $user->follow($followers_ids);
        // 获取去除掉 ID 为 1 的所有用户 ID 数组
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
