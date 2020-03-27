<?php  if ( !defined('BASEPATH')) exit('No direct script access allowed');
              /*
              | -------------------------------------------------------------------
              | DATABASE CONNECTIVITY SETTINGS
              | -------------------------------------------------------------------
              | This file will contain the settings needed to access your database.
              |
              | For complete instructions please consult the 'Database Connection'
              | page of the User Guide.
              |
              */

              $active_group = 'default';
              $active_record = TRUE;
			  
			  use Symfony\Component\Dotenv\Dotenv;

              if (file_exists('./.env')) {
                $dotenv = new Dotenv();
				$dotenv->load(__DIR__ . '/../../.env');

                $db['default']['hostname'] = getenv('DB_HOST');
                $db['default']['username'] = getenv('DB_USER');
                $db['default']['password'] = getenv('DB_PASSWORD');
                $db['default']['database'] = getenv('DB_DATABASE');
                $db['default']['dbdriver'] = 'mysqli';
                $db['default']['dbprefix'] = '';
                $db['default']['pconnect'] = FALSE;
                $db['default']['db_debug'] = TRUE;
                $db['default']['cache_on'] = FALSE;
                $db['default']['cachedir'] = '';
                $db['default']['char_set'] = 'utf8';
                $db['default']['dbcollat'] = 'utf8_general_ci';
                $db['default']['swap_pre'] = '';
                $db['default']['autoinit'] = TRUE;
                $db['default']['stricton'] = FALSE;
              } else {
                $db['default']['hostname'] = 'localhost';
                $db['default']['username'] = 'office';
                $db['default']['password'] = '12b428l8w447sCSbNMw@!!';
                $db['default']['database'] = 'office';
                $db['default']['dbdriver'] = 'mysqli';
                $db['default']['dbprefix'] = '';
                $db['default']['pconnect'] = FALSE;
                $db['default']['db_debug'] = TRUE;
                $db['default']['cache_on'] = FALSE;
                $db['default']['cachedir'] = '';
                $db['default']['char_set'] = 'utf8';
                $db['default']['dbcollat'] = 'utf8_general_ci';
                $db['default']['swap_pre'] = '';
                $db['default']['autoinit'] = TRUE;
                $db['default']['stricton'] = FALSE;
              }


              /* End of file database.php */
              /* Location: ./application/config/database.php */
              