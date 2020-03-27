<?php

/**
 * @author  Luxsys
 * @package FC3
 * @subpackage install
 * @updated 2019-06-20
 * @version 3.3.2
 **/

$installFile = '../INSTALL_TRUE';
$DBconfigFile = '../application/config/database.php';
define('BASEPATH', 'install/');
if (is_file($installFile)) {
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    $install_path = '';
    if ($uri[0] != 'install') {
        $install_path = $uri[1];
    }

    include '../application/helpers/curl_helper.php';
    include '../application/helpers/unzip_helper.php';

    switch ($_GET['step']) {
        default: ?>

            <?php
                    $error = false;
                    if (phpversion() < '7.2') {
                        $error = true;
                        $check1 = "<span class='label label-danger'>Your PHP version is " . phpversion() . '. You need at least PHP 7.2 or higher!</span>';
                    } else {
                        $check1 = "<span class='label label-success'>v." . phpversion() . '</span>';
                    }
                    if (!extension_loaded('mbstring')) {
                        $error = true;
                        $check4 = "<span class='label label-danger'>Not enabled</span>";
                    } else {
                        $check4 = "<span class='label label-success'>OK</span>";
                    }
                    if (!extension_loaded('gd')) {
                        $check5 = "<span class='label label-danger'>Not enabled</span>";
                    } else {
                        $check5 = "<span class='label label-success'>OK</span>";
                    }
                    if (!extension_loaded('pdo')) {
                        $error = true;
                        $check6 = "<span class='label label-danger'>Not enabled</span>";
                    } else {
                        $check6 = "<span class='label label-success'>OK</span>";
                    }
                    if (!extension_loaded('dom')) {
                        $check7 = "<span class='label label-danger'>Not enabled</span>";
                    } else {
                        $check7 = "<span class='label label-success'>OK</span>";
                    }
                    if (!extension_loaded('curl')) {
                        $error = true;
                        $check8 = "<span class='label label-danger'>Not enabled</span>";
                    } else {
                        $check8 = "<span class='label label-success'>OK</span>";
                    }

                    if (!is_writeable($DBconfigFile)) {
                        $error = true;
                        $check9 = "<span class='label label-danger'>Database File (application/config/database.php) is not writeable!</span>";
                    } else {
                        $check9 = "<span class='label label-success'>OK</span>";
                    }
                    if (!is_writeable('../files')) {
                        $check10 = "<span class='label label-danger'>/files folder is not writeable!</span>";
                    } else {
                        $check10 = "<span class='label label-success'>OK</span>";
                    }
                    if (ini_get('allow_url_fopen') != '1') {
                        $check11 = "<span class='label label-warning'>Allow_url_fopen is not enabled!</span>";
                    } else {
                        $check11 = "<span class='label label-success'>OK</span>";
                    }
                    if (!extension_loaded('zip')) {
                        $check12 = "<span class='label label-warning'>Not enabled</span>";
                    } else {
                        $check12 = "<span class='label label-success'>OK</span>";
                    }
                    if (!extension_loaded('imap')) {
                        $check13 = "<span class='label label-warning'>Not enabled</span>";
                    } else {
                        $check13 = "<span class='label label-success'>OK</span>";
                    }
                    if (!is_writeable('../application/views/blueline/templates')) {
                        $check14 = "<span class='label label-warning'>/application/views/blueline/templates/ folder is not writeable!</span>";
                    } else {
                        $check14 = "<span class='label label-success'>OK</span>";
                    }
                    if (!extension_loaded('json')) {
                        $error = true;
                        $check15 = "<span class='label label-danger'>Not enabled</span>";
                    } else {
                        $check15 = "<span class='label label-success'>OK</span>";
                    }
                    if (!is_writeable('../application/migrations')) {
                        $check16 = "<span class='label label-warning'>/application/migrations folder is not writeable!</span>";
                    } else {
                        $check16 = "<span class='label label-success'>OK</span>";
                    }

                    ?>

            <div class="">
                <div class="col-xs-14">
                    <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                        <li class="active"><a href="#step-1">
                                <h4 class="list-group-item-heading">System Check</h4>
                                <p class="list-group-item-text">Server Requirements</p>
                            </a></li>
                        <li class="disabled"><a href="#step-2">
                                <h4 class="list-group-item-heading">Validate</h4>
                                <p class="list-group-item-text">Purchase code</p>
                            </a></li>
                        <li class="disabled"><a href="#step-3">
                                <h4 class="list-group-item-heading">Database</h4>
                                <p class="list-group-item-text">MYSQL details</p>
                            </a></li>
                        <li class="disabled"><a href="#step-3">
                                <h4 class="list-group-item-heading">Done!</h4>
                                <p class="list-group-item-text">That's it</p>
                            </a></li>
                    </ul>
                </div>
            </div>
            <h3>Server Requirements</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Required</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHP 7.2+ </td>
                        <td><?php echo $check1; ?></td>
                    </tr>
                    <tr>
                        <td>Mysqli PHP extension</td>
                        <td><?php echo $check15; ?></td>
                    </tr>
                    <tr>
                        <td>MBString PHP extension</td>
                        <td><?php echo $check4; ?></td>
                    </tr>
                    <tr>
                        <td>GD PHP extension</td>
                        <td><?php echo $check5; ?></td>
                    </tr>
                    <tr>
                        <td>PDO PHP extension</td>
                        <td><?php echo $check6; ?></td>
                    </tr>
                    <tr>
                        <td>DOM PHP extension</td>
                        <td><?php echo $check7; ?></td>
                    </tr>
                    <tr>
                        <td>CURL PHP extension</td>
                        <td><?php echo $check8; ?></td>
                    </tr>
                    <tr>
                        <td>ZIP PHP extension</td>
                        <td><?php echo $check12; ?></td>
                    </tr>
                    <tr>
                        <td>IMAP PHP extension (only needed for Email Tickets)</td>
                        <td><?php echo $check13; ?></td>
                    </tr>
                    <tr>
                        <td>Allow_url_fopen is enabled!</td>
                        <td><?php echo $check11; ?></td>
                    </tr>
                    <tr>
                        <td>Json PHP extension</td>
                        <td><?php echo $check15; ?></td>
                    </tr>
                    <tr>
                        <td>Database file (/application/config/database.php) writeable</td>
                        <td><?php echo $check9; ?></td>
                    </tr>
                    <tr>
                        <td>/files folder is writeable</td>
                        <td><?php echo $check10; ?></td>
                    </tr>
                    <tr>
                        <td>/application/views/blueline/templates/ folder is writeable</td>
                        <td><?php echo $check14; ?></td>
                    </tr>
                    <tr>
                        <td>/application/migrations folder is writeable</td>
                        <td><?php echo $check16; ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="bottom">
                <?php if ($error) {
                            ?>
                    <a href="#" class="btn btn-primary disabled pull-right">Next Step</a>
                <?php
                        } else {
                            ?>
                    <a href="?step=0" class="btn btn-primary pull-right">Next Step</a>
                <?php
                        } ?>
            </div>

        <?php
                break;
            case '0': ?>
            <div class="">
                <div class="col-xs-14">
                    <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                        <li class="done"><a href="#step-1">
                                <h4 class="list-group-item-heading">System Check</h4>
                                <p class="list-group-item-text">Server Requirements</p>
                            </a></li>
                        <li class="active"><a href="#step-2">
                                <h4 class="list-group-item-heading">Validate</h4>
                                <p class="list-group-item-text">Purchase code</p>
                            </a></li>
                        <li class="disabled"><a href="#step-3">
                                <h4 class="list-group-item-heading">Database</h4>
                                <p class="list-group-item-text">MYSQL details</p>
                            </a></li>
                        <li class="disabled"><a href="#step-3">
                                <h4 class="list-group-item-heading">Settings</h4>
                                <p class="list-group-item-text">Your Info</p>
                            </a></li>
                        <li class="disabled"><a href="#step-3">
                                <h4 class="list-group-item-heading">Done!</h4>
                                <p class="list-group-item-text">That's it</p>
                            </a></li>
                    </ul>
                </div>
            </div>
            <h3>Purchase Code Check</h3>
            <?php
                    if ($_POST) {
                        $code = trim($_POST['code']);
                        /* TODO: change to new server! */
                        $object = remote_get_contents('https://secure.freelancecockpit.com/api/check/code/' . $code);
                        $object = json_decode($object);

                        if (!is_object($object) || $object->error != false) {
                            ?>
                    <div class="label label-important"><?php echo (!is_object($object)) ? 'Connection to server timed out. Please check your servers firewall if connection to remote server is allowed!' : $object->error; ?></div><br><br>
                    <form action="?step=0" method="POST">
                        <div class="form-group">
                            <label for="code">Item Purchase Code <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-question-circle"></i></a></label>
                            <input id="code" type="text" class="form-control" name="code" />
                        </div>
                        <div class="bottom">
                            <input type="submit" class="btn btn-primary pull-right" value="Check" />
                        </div>
                    </form>

                <?php
                            } else {
                                ?>
                    <form action="?step=1" method="POST">
                        <p>
                            <div class="label label-success">Your purchase code is valid!</div>
                        </p><input id="code" type="hidden" name="code" value="<?php echo $code; ?>" />
                        <div class="bottom">
                            <input type="submit" class="btn btn-primary pull-right" value="Next Step" />
                        </div>
                    </form><?php
                                        }
                                    } else {
                                        ?>
                <p>Please enter your item purchase code of Freelance Cockpit 3</p><br>
                <form action="?step=0" method="POST">
                    <div class="form-group">
                        <label for="code">Item Purchase Code <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-question-circle"></i></a></label>
                        <input id="code" class="form-control" type="text" name="code">
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Next</button>
                </form>
            <?php
                    }
                    break;
                case '1': ?>
            <div class="">
                <div class="col-xs-14">
                    <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                        <li class="done"><a href="">
                                <h4 class="list-group-item-heading">System Check</h4>
                                <p class="list-group-item-text">Server Requirements</p>
                            </a></li>
                        <li class="done"><a href="">
                                <h4 class="list-group-item-heading">Validate</h4>
                                <p class="list-group-item-text">Purchase code</p>
                            </a></li>
                        <li class="active"><a href="">
                                <h4 class="list-group-item-heading">Database</h4>
                                <p class="list-group-item-text">MYSQL details</p>
                            </a></li>
                        <li class="disabled"><a href="">
                                <h4 class="list-group-item-heading">Done!</h4>
                                <p class="list-group-item-text">That's it</p>
                            </a></li>
                    </ul>
                </div>
            </div>
            <?php if ($_POST) {
                        ?>
                <h3>Database Config</h3>
                <p class="label label-warning">Information: If the database does not exist the system will try to create it.</p><br><br>
                <form action="?step=2" method="POST">
                    <div class="form-group">
                        <label for="host">Host *</label>
                        <input id="host" type="text" name="host" class="required form-control" value="127.0.0.1" />
                    </div>
                    <div class="form-group">
                        <label for="username">Username *</label>
                        <input id="username" type="text" name="username" class="form-control required" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input id="password" type="password" pattern="[^\\]+" title="No backslash (\) allowed in password" class="form-control" name="password" />
                    </div>
                    <div class="form-group">
                        <label for="dbname">Database Name *</label>
                        <input id="dbname" type="text" class="form-control" name="dbname" value="FC" />
                    </div>
                    <input id="code" type="hidden" name="code" value="<?php echo trim($_POST['code']); ?>" />
                    <div class="bottom">
                        <input type="submit" class="btn btn-primary pull-right" value="Next Step" />
                    </div>
                </form>
            <?php
                    }
                    break;
                case '2':
                    ?>
            <div class="">
                <div class="col-xs-14">
                    <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                        <li class="done"><a href="">
                                <h4 class="list-group-item-heading">System Check</h4>
                                <p class="list-group-item-text">Server Requirements</p>
                            </a></li>
                        <li class="done"><a href="">
                                <h4 class="list-group-item-heading">Validate</h4>
                                <p class="list-group-item-text">Purchase code</p>
                            </a></li>
                        <li class="active"><a href="">
                                <h4 class="list-group-item-heading">Database</h4>
                                <p class="list-group-item-text">MYSQL details</p>
                            </a></li>
                        <li class="disabled"><a href="">
                                <h4 class="list-group-item-heading">Done!</h4>
                                <p class="list-group-item-text">That's it</p>
                            </a></li>
                    </ul>
                </div>
            </div>
            <h3>Saving database config</h3>
            <?php
                    if ($_POST) {
                        $host = $_POST['host'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $dbname = $_POST['dbname'];
                        $code = trim($_POST['code']);
                        $link = @mysqli_connect($host, $username, $password);
                        if (!$link) {
                            echo "<br><div class='label label-danger'>Could not connect to MYSQL!</div>";
                        } else {
                            echo '<br><div class="label label-success">Connection to MYSQL successful!</div>';

                            $db_selected = @mysqli_select_db($link, $dbname);
                            if (!$db_selected) {
                                if (!mysqli_query($link, "CREATE DATABASE IF NOT EXISTS `$dbname` /*!40100 CHARACTER SET utf8 COLLATE 'utf8_general_ci' */")) {
                                    echo "<br><div class='label label-important'>Database " . $dbname . ' does not exist and could not be created. Please create the Database manually and retry this step.</div>';
                                    $res = mysqli_query('SHOW DATABASES');
                                    echo '<br><br><b>The following databases are available:</b><br>';
                                    while ($row = mysqli_fetch_assoc($link, $res)) {
                                        echo $row['Database'] . '<br>';
                                    }
                                    return false;
                                } else {
                                    echo "<br><div class='label label-success'>Database " . $dbname . ' created</div>';
                                }
                            }
                            mysqli_select_db($link, $dbname);

                            function write_dbconfig($host, $username, $password, $dbname, $DBconfigFile)
                            {
                                $newcontent = '<?php  if ( !defined(\'BASEPATH\')) exit(\'No direct script access allowed\');
              /*
              | -------------------------------------------------------------------
              | DATABASE CONNECTIVITY SETTINGS
              | -------------------------------------------------------------------
              | This file will contain the settings needed to access your database.
              |
              | For complete instructions please consult the \'Database Connection\'
              | page of the User Guide.
              |
              */

              $active_group = \'default\';
              $active_record = TRUE;
			  
			  use Symfony\Component\Dotenv\Dotenv;

              if (file_exists(\'./.env\')) {
                $dotenv = new Dotenv();
				$dotenv->load(__DIR__ . \'/../../.env\');

                $db[\'default\'][\'hostname\'] = getenv(\'DB_HOST\');
                $db[\'default\'][\'username\'] = getenv(\'DB_USER\');
                $db[\'default\'][\'password\'] = getenv(\'DB_PASSWORD\');
                $db[\'default\'][\'database\'] = getenv(\'DB_DATABASE\');
                $db[\'default\'][\'dbdriver\'] = \'mysqli\';
                $db[\'default\'][\'dbprefix\'] = \'\';
                $db[\'default\'][\'pconnect\'] = FALSE;
                $db[\'default\'][\'db_debug\'] = TRUE;
                $db[\'default\'][\'cache_on\'] = FALSE;
                $db[\'default\'][\'cachedir\'] = \'\';
                $db[\'default\'][\'char_set\'] = \'utf8\';
                $db[\'default\'][\'dbcollat\'] = \'utf8_general_ci\';
                $db[\'default\'][\'swap_pre\'] = \'\';
                $db[\'default\'][\'autoinit\'] = TRUE;
                $db[\'default\'][\'stricton\'] = FALSE;
              } else {
                $db[\'default\'][\'hostname\'] = \'' . $host . '\';
                $db[\'default\'][\'username\'] = \'' . $username . '\';
                $db[\'default\'][\'password\'] = \'' . $password . '\';
                $db[\'default\'][\'database\'] = \'' . $dbname . '\';
                $db[\'default\'][\'dbdriver\'] = \'mysqli\';
                $db[\'default\'][\'dbprefix\'] = \'\';
                $db[\'default\'][\'pconnect\'] = FALSE;
                $db[\'default\'][\'db_debug\'] = TRUE;
                $db[\'default\'][\'cache_on\'] = FALSE;
                $db[\'default\'][\'cachedir\'] = \'\';
                $db[\'default\'][\'char_set\'] = \'utf8\';
                $db[\'default\'][\'dbcollat\'] = \'utf8_general_ci\';
                $db[\'default\'][\'swap_pre\'] = \'\';
                $db[\'default\'][\'autoinit\'] = TRUE;
                $db[\'default\'][\'stricton\'] = FALSE;
              }


              /* End of file database.php */
              /* Location: ./application/config/database.php */
              ';

                                $result = false;
                                $fh = fopen($DBconfigFile, 'w');
                                $file_contents = $newcontent;
                                if (fwrite($fh, $file_contents)) {
                                    $result = true;
                                }
                                fclose($fh);
                                return $result;
                            }
                            if (!write_dbconfig($host, $username, $password, $dbname, $DBconfigFile)) {
                                echo "<br><div class='label label-important'>Failed to write config to " . $DBconfigFile . '</div>';
                            } else {
                                echo "<br><div class='label label-success'>Database config written to the database file.</div>";
                            }

                            function write_envfile($baseurl, $dbhost, $dbname, $dbuser, $dbpassword)
                            {
                                $content = '# Freelance Cockpit environment configuration file' . PHP_EOL .
                                    PHP_EOL .
                                    'APP_BASEURL="' . $baseurl . '"' . PHP_EOL .
                                    PHP_EOL .
                                    'DB_HOST="' . $dbhost . '"' . PHP_EOL .
                                    'DB_DATABASE="' . $dbname . '"' . PHP_EOL .
                                    'DB_USER="' . $dbuser . '"' . PHP_EOL .
                                    'DB_PASSWORD="' . $dbpassword  . '"' . PHP_EOL .
                                    PHP_EOL;

                                return file_put_contents(__DIR__ . '/../.env', $content) !== false;
                            }
                            $protocol = ($_SERVER['HTTPS'] == '' || $_SERVER['HTTPS'] == 'off') ? 'http://' : 'https://';
                            $uri = explode('install', $_SERVER['REQUEST_URI']);
                            $domain = $protocol . $_SERVER['HTTP_HOST'] . (($_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != '443') ? ':' . $_SERVER['SERVER_PORT'] : '') . $uri[0];

                            if (!write_envfile($domain, $host, $dbname, $username, $password)) {
                                echo "<br><div class='label label-important'>Failed to create .env file!</div><br><br>";
                            } else {
                                chmod(__DIR__ . '/../.env', 0640);
                                echo "<br><div class='label label-success'>.env file has been created</div><br><br>";
                            }
                        }
                    } else {
                        echo "<br><div class='label label-success'>Nothing to do...</div><br><br>";
                    }
                    ?>
            <div class="bottom">
                <form action="?step=1" method="POST">
                    <input id="code" type="hidden" name="code" value="<?php echo trim($_POST['code']); ?>" />
                    <input type="submit" class="btn btn-default pull-left" value="Previous Step" />
                </form>
                <form action="?step=3" method="POST">
                    <input id="code" type="hidden" name="code" value="<?php echo trim($_POST['code']); ?>" />
                    <input type="submit" class="btn btn-primary pull-right" value="Next Step">
                </form>
                <br clear="all">
            </div>
        <?php
                break;

            case '3': ?>
            <div class="">
                <div class="col-xs-14">
                    <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                        <li class="done"><a href="">
                                <h4 class="list-group-item-heading">System Check</h4>
                                <p class="list-group-item-text">Server Requirements</p>
                            </a></li>
                        <li class="done"><a href="">
                                <h4 class="list-group-item-heading">Validate</h4>
                                <p class="list-group-item-text">Purchase code</p>
                            </a></li>
                        <li class="done"><a href="">
                                <h4 class="list-group-item-heading">Database</h4>
                                <p class="list-group-item-text">MYSQL details</p>
                            </a></li>
                        <li class="active"><a href="">
                                <h4 class="list-group-item-heading">Done!</h4>
                                <p class="list-group-item-text">That's it</p>
                            </a></li>
                    </ul>
                </div>
            </div>

            <?php if ($_POST) {
                        $code = $_POST['code'];
                        $installer_version = str_replace('.', '', trim(file_get_contents('../application/version.txt')));
                        $install_url = 'https://secure.freelancecockpit.com/api/install/version/' . $installer_version . '/code/' . $code;
                        $file_destination = '../application/migrations/mig' . $installer_version . '.zip';

                        if (!curl_download($install_url, $file_destination)) {
                            echo "<br><div class='label label-important'>Error while downloading source files from installation server. Please ensure that remote connections are not blocked by your servers firewall!</div>";
                        } else {
                            if (!unzip($file_destination, '../application/migrations/', true, true)) {
                                $this->session->set_flashdata('message', 'error:' . $this->lang->line('messages_install_update_error'));
                            } else {
                                @unlink($file_destination);
                            }
                        }

                        $protocol = ($_SERVER['HTTPS'] == '' || $_SERVER['HTTPS'] == 'off') ? 'http://' : 'https://';
                        $uri = explode('install', $_SERVER['REQUEST_URI']);
                        $domain = $protocol . $_SERVER['HTTP_HOST'] . (($_SERVER['SERVER_PORT'] != '80' && $_SERVER['SERVER_PORT'] != '443') ? ':' . $_SERVER['SERVER_PORT'] : '') . $uri[0];
                        if ($uri[0] != '/') {
                            $input = '<IfModule mod_headers.c>
Header set Cache-Control "no-cache, no-store, must-revalidate"
Header set Pragma "no-cache"
Header set Expires 0
</IfModule>

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteBase ' . $uri[0] . '
RewriteRule ^(.*)$ index.php?/$1 [L]';
                            $current = @file_put_contents('../.htaccess', $input);
                        }

                        /* Write domain url to baseurl.txt */
                        $file_path = './baseurl.txt';
                        $file = fopen($file_path, 'w+');
                        if ($file) {
                            fwrite($file, $domain);
                            fclose($file);
                        }
                    }

                    $url = $domain . 'migrate/now/install/' . $code;
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HEADER, true); //Include the headers
                    curl_setopt($ch, CURLOPT_NOBODY, true); //Make HEAD request
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

                    $response = curl_exec($ch);

                    if ($response === false) {
                        //something went wrong, assume not valid
                    }

                    //list of status codes to treat as valid:
                    $validStatus = [200, 301, 302, 303, 307];
                    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    $migrate_error = false;
                    if (!in_array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $validStatus)) {
                        $migrate_error = true;
                        echo curl_error($ch) ?>
                <br>
                <div class="label label-warning" style="display: inherit; white-space: normal;line-height: 15px;">Your .htaccess file check failed with http status <?php echo $http_status; ?>. (<a href="<?= $url ?>"><?= $url ?></a>)<br> You might get an error message if you click on "Go to Login" as your .htaccess needs to be changed. This issue mostly appears if you have installed Freelance Cockpit into a sub folder. Please take a look at the <a href="http://codecanyon.net/item/freelance-cockpit-2-project-management/4203727/support" target="blank">FAQ</a> in order to fix your .htaccess file.</div>
            <?php
                    }

                    curl_close($ch);

                    if (file_exists('../INSTALL_TRUE')) {
                        echo "<br><div class='label label-warning'>Please remove the INSTALL_TRUE file from the main folder in order to disable the installation tool!</div>";
                    }
                    ?>

            <br>
            <div><b>You can login using the following credentials: </b><br>Username: <b>Admin</b> <br>Password: <b>password</b></div>
            <br>
            <div class="label label-warning">Important! Change your password after login.</div><br><br>
            <div class="bottom">
                <a href="<?php echo ($migrate_error) ? $url . '/redirect' : $domain . 'login'; ?>" class="btn btn-blue">Go to Login</a>
            </div>

    <?php
    }
} else {
    echo "<div class='label label-important'>Installation tool not active! Just create a file named \"INSTALL_TRUE\" within the main folder.</div>";
}
?>