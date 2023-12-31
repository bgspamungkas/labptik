<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Guest\Guest::index');

// route admin dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

// route admin member
$routes->get('member', 'Admin\MemberController::index');

//LOGIN
$routes->get('/otentikasi', 'Otentikasi::index',); //halaman login
$routes->get('/signup', 'Otentikasi::signup'); //form signup
$routes->post('/masuk', 'Otentikasi::login'); //fungsi login
$routes->post('/daftar', 'Otentikasi::daftar'); //fungsi daftar member
$routes->get('/keluar', 'Otentikasi::logout'); //fungsi logout

//Admin Panel
$routes->get('/Admin', 'AdminController::index',);

$routes->get('/newuser', 'AdminController::newuser');
$routes->get('/newuserdata', 'AdminController::getDatanewuser'); //Ajax newuser
$routes->put('/terima/(:segment)', 'AdminController::accuser/$1'); //fungsi terima user
$routes->delete('/tolak/(:segment)', 'AdminController::disaccuser/$1'); //fungsi tolak user

$routes->get('/user', 'AdminController::user');
$routes->get('/userdata', 'AdminController::getDatauser'); //Ajax newuser
$routes->delete('/hapus/(:segment)', 'AdminController::deleteuser/$1'); //fungsi hapus user


$routes->get('/peminjaman', 'AdminController::request');
$routes->get('/requestdata', 'AdminController::getDatarequest'); //Ajax request peminjaman
$routes->put('/terimapeminjaman/(:segment)', 'AdminController::accpeminjaman/$1'); //fungsi terima pinjam
$routes->delete('/tolakpeminjaman/(:segment)', 'AdminController::disaccpeminjaman/$1'); //fungsi tolak pinjam

$routes->get('/jadwal', 'AdminController::jadwal');
$routes->get('/jadwaldata', 'AdminController::getDatajadwal');



// Member Panel
$routes->get('/Peminjam', 'MemberController::index',);
$routes->get('/formpinjam/(:segment)', 'MemberController::formpinjam/$1'); //tampil form pinjam
$routes->get('/jadwalpeminjaman', 'MemberController::jadwalpeminjaman'); //tampil Jadwal
$routes->get('/profilpeminjam', 'MemberController::profil'); //halaman profil
$routes->get('/profiluser/(:segment)', 'MemberController::profilUser/$1'); //halaman panel detail user
$routes->get('/profildata/(:segment)', 'MemberController::profilUserdata/$1'); //data detail user
$routes->get('/editprofil/(:segment)', 'MemberController::editprofil/$1'); // tampil form edit user
$routes->put('/editprofil/updateprofil/(:segment)', 'MemberController::updateprofil/$1'); //fungsi ubah user
$routes->post('/pinjam', 'MemberController::pinjam'); //pinjam