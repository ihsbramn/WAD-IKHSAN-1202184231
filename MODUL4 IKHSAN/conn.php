<!-- koneksi database -->
<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "wad_modul4";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }


    function register($nama, $email, $no_hp, $password)
    {
        $insert = mysqli_query($this->koneksi, "insert into user values ('','$nama','$email','$no_hp','$password')");
        return $insert;
    }

    function login($email, $password, $remember)
    {
        $query = mysqli_query($this->koneksi, "select * from user where email = '$email'");
        $data_user = $query->fetch_array();
        if (password_verify($password, $data_user['password'])) {


            if ($remember) {
                setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
                setcookie('password', $data_user['password'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['id'] = $data_user['id'];
            $_SESSION['no_hp'] = $data_user['no_hp'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($email)
    {
        $query = mysqli_query($this->koneksi, "select * from user where email='$email'");
        $data_user = $query->fetch_array();
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['id'] = $data_user['id'];
        $_SESSION['no_hp'] = $data_user['no_hp'];
        $_SESSION['is_login'] = TRUE;
    }

    function show_cart()
    {
        $data = mysqli_query($this->koneksi, "select * from cart");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function add_cart($user_id, $nama_barang, $harga)
    {
        session_start();
        $user_id = $_SESSION['id'];
        mysqli_query($this->koneksi, "INSERT INTO cart values (' ','$user_id ','$nama_barang','$harga')");
        $_SESSION['alert'] = '<div class="alert alert-warning" role="alert">Barang Berhasil ditambahkan!</div>';
    }

    function get_by_id($id)
    {
        $query = mysqli_query($this->koneksi, "select * from cart where id ='$id");
        return $query->fetch_array();
    }

    function update_profile($nama, $no_hp, $password, $id)
    {
        session_start();
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = mysqli_query($this->koneksi, "UPDATE user SET nama='$nama', no_hp='$no_hp', password='$password' where id='$id'");
    }

    function delete_cart($id_barang)
    {
        $query = mysqli_query($this->koneksi, "DELETE from cart WHERE id='$id_barang'");
    }
}
?>
<!-- koneksi database -->