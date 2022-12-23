<?php
//===============PATHS===================
define('DS'             , DIRECTORY_SEPARATOR);
define('ROOT_PATH'      , dirname(__FILE__)); //Định nghĩa đường dẫn đến thư mục gốc (mvc_basic)
define('LIBRARY_PATH'   , ROOT_PATH . DS. 'libs' .DS); //Định nghĩa đường dẫn đến thư mục thư viện (libs)
define('CONTROLLER_PATH', ROOT_PATH . DS. 'controllers' .DS); //đường dẫn đến thư mục controller
define('MODEL_PATH'     , ROOT_PATH . DS. 'models' .DS); //đường dẫn đến thư mục models
define('VIEW_PATH'      , ROOT_PATH . DS. 'views' .DS); //đường dẫn đến thư mục views
define('PUBLIC_PATH'    , ROOT_PATH . DS. 'public' .DS); //đường dẫn đến thư mục public

define('ROOT_URL'       ,  '');
define('PUBLIC_URL'     , ROOT_URL . DS . 'public' . DS);

//===============DATABASE===================
define('DB_HOST'        , '127.0.0.1');
define('DB_PORT'        , 8889); // 3306
define('DB_USER'        , 'root');
define('DB_PASSWORD'    , 'root');
define('DB_NAME'        , 'banhang');
define('DB_TABLE'        , 'users');


