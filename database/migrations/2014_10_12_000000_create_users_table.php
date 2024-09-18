<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email')->unique();
      $table->string('contact_number');
      $table->string('gender');
      $table->string('password');
      $table->string('user_type');
      $table->string('image')->nullable();
      $table->timestamps();
    });
    User::insert([
      [
        'first_name' => 'Marish',
        'last_name' => 'Jambo',
        'email' => 'user@gmail.com',
        'contact_number' => '09123456789',
        'gender' => 'female',
        'password' => Hash::make('1234'),
        'user_type' => 'user',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'fname' => 'Juan',
        'lname' => 'Cruz',
        'email' => 'incharge@gmail.com',
        'contact' => '09123456789',
        'gender' => 'female',
        'password' => Hash::make('1234'),
        'usertype' => 'incharge',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'fname' => 'John',
        'lname' => 'Doe',
        'email' => 'admin@gmail.com',
        'contact' => '09123456789',
        'gender' => 'female',
        'password' => Hash::make('1234'),
        'usertype' => 'admin',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'first_name' => 'John',
        'last_name' => 'Pablo',
        'email' => 'user1@gmail.com',
        'contact_number' => '09123456789',
        'gender' => 'male',
        'password' => Hash::make('1234'),
        'user_type' => 'user',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'first_name' => 'Jack',
        'last_name' => 'Jill',
        'email' => 'user2@gmail.com',
        'contact_number' => '09123456789',
        'gender' => 'male',
        'password' => Hash::make('1234'),
        'user_type' => 'user',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now()
      ],
      [
        'first_name' => 'Yza',
        'last_name' => 'Porbo',
        'email' => 'user3@gmail.com',
        'contact_number' => '09123456789',
        'gender' => 'female',
        'password' => Hash::make('1234'),
        'user_type' => 'user',
        'image' => null,
        'created_at' => now(),
        'updated_at' => now()
      ],
    ]);
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('users');
  }
};
