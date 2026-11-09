<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class ExistingUserPasswords extends Seeder
{
    public function run()
    {
        $password = getenv('TFA4_INITIAL_PASSWORD');
        if (! is_string($password) || strlen($password) < 8) {
            throw new \RuntimeException('Set TFA4_INITIAL_PASSWORD to a temporary password of at least 8 characters before running this seeder.');
        }
        $this->db->table('users')->where('password', null)->update(['password' => password_hash($password, PASSWORD_DEFAULT)]);
    }
}
