# crud-dasar-codeigniter
crud dasar dengan codeigniter 3.1.4 dan bootstrap 3.3.6


# Buat tabel database
`CREATE TABLE IF NOT EXISTS 'mahasiswa' (`
  `'nim' varchar(12) NOT NULL,`
  `'nama_mahasiswa' varchar(50) NOT NULL,`
  `'kelas' varchar(10) NOT NULL,`
  `'fakultas' varchar(20) NOT NULL`
`) ENGINE=InnoDB DEFAULT CHARSET=latin1;`

`ALTER TABLE 'mahasiswa'`
 `ADD PRIMARY KEY ('nim');`


# application/config/config.php
`$config['base_url'] = 'http://localhost/crud-dasar';`


# application/config/routes.php
`$route['default_controller'] = 'home';`


# application/config/database.php
`$db['default'] = array(`
	`'dsn'	=> '',`
	`'hostname' => 'localhost',`
	`'username' => 'root',`
	`'password' => '',`
	`'database' => 'crud_dasar',`
	`'dbdriver' => 'mysqli',`
	`'dbprefix' => '',`
	`'pconnect' => FALSE,`
	`'db_debug' => (ENVIRONMENT !== 'production'),`
	`'cache_on' => FALSE,`
	`'cachedir' => '',`
	`'char_set' => 'utf8',`
	`'dbcollat' => 'utf8_general_ci',`
	`'swap_pre' => '',`
	`'encrypt' => FALSE,`
	`'compress' => FALSE,`
	`'stricton' => FALSE,`
	`'failover' => array(),`
	`'save_queries' => TRUE`
`);`
