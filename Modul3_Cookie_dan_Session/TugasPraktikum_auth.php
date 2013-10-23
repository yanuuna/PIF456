<?php
    defined('_VALID')or die('not allowed');

    function init_login(){
        global $username;
        global $password;
        $username = 'admin';
        $password = 'admin';

        if(isset($_POST['username']) && isset($_POST['password'])){
            $n = trim($_POST['username']);
            $p = trim($_POST['password']);

            if(($n === $username) && ($p === $password)){                  
                $_SESSION['loggedin'] = $n;
                $_SESSION['time'] = time();
                ?>
                <script type="text/javascript">
                    document.location.href="./";
                </script>
            <?php
            }else{
                return false;
            }
        }
    }

    function validate(){
        global $username;
        global $password;

        if(!isset($_SESSION['loggedin']) || !isset($_SESSION['time'])){
        ?>
        <?php
            if(isset($_POST['username']) && isset($_POST['password'])){
                if(is_string($_POST['username']) && is_string($_POST['password'])){ // Validasi form bernilai string
                    if($_POST['username'] == $username && $_POST['password'] != $password){
                        print '<blockquote>Password salah</blockquote>';
                    }elseif($_POST['username'] != $username && $_POST['password'] == $password){
                        print '<blockquote>Username salah</blockquote>';
                    }elseif($_POST['username'] != $username && $_POST['password'] != $password){
                        print '<blockquote>Username & Password salah</blockquote>';
                    }
                }
            }
        ?>
        <form id="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return formCheck();">
            <table>
                <tr>
                    <td><div class="username">Username </div></td>
                    <td><input type="text" name="username" id="username" value="<?php
                            echo isset($_POST['username']) ? $_POST['username'] : '';
                    ?>" onkeypress="return alphabetOnly(event)"></td>
                </tr>
                <tr>
                    <td><div class="password">Password </div></td>
                    <td><input type="password" name="password" id="password" onkeypress="return alphabetOnly(event)"></td>
                </tr>
            </table>
            <input class="button" type="submit" value="LOGIN" />                                        
        </form>
        </div>
        <?php
        exit;
        }

        if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
        // Hapus session
        if(isset($_SESSION['loggedin'])){
                unset($_SESSION['loggedin']);
        }
        if(isset($_SESSION['time'])){
                unset($_SESSION['time']);
        }
        ?>

        <script type="text/javascript">
                document.location.href="./";
        </script>

        <?php
        }
    }
?>