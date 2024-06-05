<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Insert data into cinemas table
        DB::table('cinemas')->insert([
            ['name' => 'Cinema One', 'location' => '123 Main St, City A', 'total_screens' => 5],
            ['name' => 'Cinema Two', 'location' => '456 Elm St, City B', 'total_screens' => 7],
            ['name' => 'Cinema Three', 'location' => '789 Oak St, City C', 'total_screens' => 4],
            ['name' => 'Cinema Four', 'location' => '101 Pine St, City D', 'total_screens' => 6],
            ['name' => 'Cinema Five', 'location' => '202 Maple St, City E', 'total_screens' => 8],
            ['name' => 'Cinema Six', 'location' => '303 Birch St, City F', 'total_screens' => 5],
            ['name' => 'Cinema Seven', 'location' => '404 Cedar St, City G', 'total_screens' => 7],
            ['name' => 'Cinema Eight', 'location' => '505 Walnut St, City H', 'total_screens' => 4],
            ['name' => 'Cinema Nine', 'location' => '606 Chestnut St, City I', 'total_screens' => 6],
            ['name' => 'Cinema Ten', 'location' => '707 Willow St, City J', 'total_screens' => 8],
        ]);

        // Insert data into users table
        DB::table('users')->insert([
            ['first_name' => 'John', 'last_name' => 'Doe', 'email' => 'john.doe@example.com', 'phone' => '123-456-7890', 'password' => Hash::make('password')],
            ['first_name' => 'Jane', 'last_name' => 'Smith', 'email' => 'jane.smith@example.com', 'phone' => '234-567-8901', 'password' => Hash::make('password')],
            ['first_name' => 'Alice', 'last_name' => 'Johnson', 'email' => 'alice.johnson@example.com', 'phone' => '345-678-9012', 'password' => Hash::make('password')],
            ['first_name' => 'Bob', 'last_name' => 'Williams', 'email' => 'bob.williams@example.com', 'phone' => '456-789-0123', 'password' => Hash::make('password')],
            ['first_name' => 'Charlie', 'last_name' => 'Brown', 'email' => 'charlie.brown@example.com', 'phone' => '567-890-1234', 'password' => Hash::make('password')],
            ['first_name' => 'David', 'last_name' => 'Davis', 'email' => 'david.davis@example.com', 'phone' => '678-901-2345', 'password' => Hash::make('password')],
            ['first_name' => 'Ella', 'last_name' => 'Wilson', 'email' => 'ella.wilson@example.com', 'phone' => '789-012-3456', 'password' => Hash::make('password')],
            ['first_name' => 'Frank', 'last_name' => 'Miller', 'email' => 'frank.miller@example.com', 'phone' => '890-123-4567', 'password' => Hash::make('password')],
            ['first_name' => 'Grace', 'last_name' => 'Moore', 'email' => 'grace.moore@example.com', 'phone' => '901-234-5678', 'password' => Hash::make('password')],
            ['first_name' => 'Hank', 'last_name' => 'Taylor', 'email' => 'hank.taylor@example.com', 'phone' => '012-345-6789', 'password' => Hash::make('password')],
        ]);

        // Insert data into movies table
        DB::table('movies')->insert([
            ['title' => 'Movie One', 'genre' => 'Action', 'duration' => 120, 'rating' => 'PG-13', 'release_date' => '2023-01-01', 'description' => 'Action movie description.'],
            ['title' => 'Movie Two', 'genre' => 'Comedy', 'duration' => 90, 'rating' => 'PG', 'release_date' => '2023-02-01', 'description' => 'Comedy movie description.'],
            ['title' => 'Movie Three', 'genre' => 'Drama', 'duration' => 150, 'rating' => 'R', 'release_date' => '2023-03-01', 'description' => 'Drama movie description.'],
            ['title' => 'Movie Four', 'genre' => 'Horror', 'duration' => 100, 'rating' => 'R', 'release_date' => '2023-04-01', 'description' => 'Horror movie description.'],
            ['title' => 'Movie Five', 'genre' => 'Thriller', 'duration' => 110, 'rating' => 'PG-13', 'release_date' => '2023-05-01', 'description' => 'Thriller movie description.'],
            ['title' => 'Movie Six', 'genre' => 'Romance', 'duration' => 105, 'rating' => 'PG', 'release_date' => '2023-06-01', 'description' => 'Romance movie description.'],
            ['title' => 'Movie Seven', 'genre' => 'Sci-Fi', 'duration' => 130, 'rating' => 'PG-13', 'release_date' => '2023-07-01', 'description' => 'Sci-Fi movie description.'],
            ['title' => 'Movie Eight', 'genre' => 'Fantasy', 'duration' => 140, 'rating' => 'PG', 'release_date' => '2023-08-01', 'description' => 'Fantasy movie description.'],
            ['title' => 'Movie Nine', 'genre' => 'Documentary', 'duration' => 95, 'rating' => 'G', 'release_date' => '2023-09-01', 'description' => 'Documentary movie description.'],
            ['title' => 'Movie Ten', 'genre' => 'Adventure', 'duration' => 125, 'rating' => 'PG-13', 'release_date' => '2023-10-01', 'description' => 'Adventure movie description.'],
        ]);

        // Insert data into schedules table
        DB::table('schedules')->insert([
            ['cinema_id' => 1, 'movie_id' => 1, 'screen_number' => 1, 'show_time' => '2024-06-01 14:00:00'],
            ['cinema_id' => 2, 'movie_id' => 2, 'screen_number' => 2, 'show_time' => '2024-06-01 16:00:00'],
            ['cinema_id' => 3, 'movie_id' => 3, 'screen_number' => 3, 'show_time' => '2024-06-01 18:00:00'],
            ['cinema_id' => 4, 'movie_id' => 4, 'screen_number' => 4, 'show_time' => '2024-06-01 20:00:00'],
            ['cinema_id' => 5, 'movie_id' => 5, 'screen_number' => 5, 'show_time' => '2024-06-02 14:00:00'],
            ['cinema_id' => 6, 'movie_id' => 6, 'screen_number' => 1, 'show_time' => '2024-06-02 16:00:00'],
            ['cinema_id' => 7, 'movie_id' => 7, 'screen_number' => 2, 'show_time' => '2024-06-02 18:00:00'],
            ['cinema_id' => 8, 'movie_id' => 8, 'screen_number' => 3, 'show_time' => '2024-06-02 20:00:00'],
            ['cinema_id' => 9, 'movie_id' => 9, 'screen_number' => 4, 'show_time' => '2024-06-03 14:00:00'],
            ['cinema_id' => 10, 'movie_id' => 10, 'screen_number' => 5, 'show_time' => '2024-06-03 16:00:00'],
        ]);

        // Insert data into bookings table
        DB::table('bookings')->insert([
            ['user_id' => 1, 'schedule_id' => 1, 'booking_time' => '2024-05-01 12:00:00', 'total_amount' => 15.00, 'seats' => 2],
            ['user_id' => 2, 'schedule_id' => 2, 'booking_time' => '2024-05-01 13:00:00', 'total_amount' => 20.00, 'seats' => 3],
            ['user_id' => 3, 'schedule_id' => 3, 'booking_time' => '2024-05-01 14:00:00', 'total_amount' => 10.00, 'seats' => 1],
            ['user_id' => 4, 'schedule_id' => 4, 'booking_time' => '2024-05-01 15:00:00', 'total_amount' => 25.00, 'seats' => 4],
            ['user_id' => 5, 'schedule_id' => 5, 'booking_time' => '2024-05-01 16:00:00', 'total_amount' => 30.00, 'seats' => 5],
            ['user_id' => 6, 'schedule_id' => 6, 'booking_time' => '2024-05-01 17:00:00', 'total_amount' => 15.00, 'seats' => 2],
            ['user_id' => 7, 'schedule_id' => 7, 'booking_time' => '2024-05-01 18:00:00', 'total_amount' => 20.00, 'seats' => 3],
            ['user_id' => 8, 'schedule_id' => 8, 'booking_time' => '2024-05-01 19:00:00', 'total_amount' => 10.00, 'seats' => 1],
            ['user_id' => 9, 'schedule_id' => 9, 'booking_time' => '2024-05-01 20:00:00', 'total_amount' => 25.00, 'seats' => 4],
            ['user_id' => 10, 'schedule_id' => 10, 'booking_time' => '2024-05-01 21:00:00', 'total_amount' => 30.00, 'seats' => 5],
        ]);
    }
}
