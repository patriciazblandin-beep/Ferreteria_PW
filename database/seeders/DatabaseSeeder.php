<?php
    namespace Database\Seeders;
    use App\Models\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\Hash;
    class DatabaseSeeder extends Seeder
{
        public function run(): void
 {
 User::create([
    'name' => 'Administrador La Bendición',
    'email' => 'admin@labendicion.hn',
    'password' => Hash::make('admin123'),
 ]);
 }
}
