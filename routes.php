<?php

// return  [
// '/' => 'controllers/index.php',
// '/admin/teachers/create' => 'controllers/admin/teacher-create.php',
// '/admin/teachers' => 'controllers/teacher-show.php',
// '/admin/dashboard' => 'controllers/admin/index.php',
// ];

/* ------------------- Guest Routes ------------------- */
$router->get('/boot', 'controllers/boots.php');
$router->get('/', 'controllers/guest/index.php')->only('guest');
$router->get('/about', 'controllers/guest/about.php')->only('guest');
$router->get('/contact', 'controllers/guest/contact.php')->only('guest');
$router->get('/login', 'controllers/guest/sessions/create.php')->only('guest');
$router->post('/sessions', 'controllers/guest/sessions/store.php')->only('guest');
$router->delete('/sessions', 'controllers/guest/sessions/destroy.php')->only('auth');

/* ------------------- Admin Routes ------------------- */
$router->get('/admin/dashboard', 'controllers/admin/index.php')->only('admin');
$router->get('/admin/dashboard', 'controllers/admin/index.php')->only('admin');
$router->get('/admin/teachers/show', 'controllers/admin/teachers/show.php')->only('admin');
$router->get('/admin/teachers/create', 'controllers/admin/teachers/create.php')->only('admin');
$router->post('/admin/teachers/store', 'controllers/admin/teachers/store.php')->only('admin');
$router->get('/admin/students/show', 'controllers/admin/students/show.php')->only('admin');
$router->get('/admin/students/create', 'controllers/admin/students/create.php')->only('admin');
$router->post('/admin/students/store', 'controllers/admin/students/store.php')->only('admin');
$router->get('/admin/grades/show', 'controllers/admin/grades/show.php')->only('admin');
$router->get('/admin/academics/calendar', 'controllers/admin/academics/calendar/show.php')->only('admin');
$router->get('/admin/academics/event/create', 'controllers/admin/academics/event/create.php')->only('admin');
$router->get('/admin/academics/year/create', 'controllers/admin/academics/year/create.php')->only('admin');
$router->post('/admin/academics/year/store', 'controllers/admin/academics/year/store.php')->only('admin');


/* ------------------- Teacher Routes ------------------- */
$router->get('/teacher/dashboard', 'controllers/facilitator/index.php')->only('facilitator');

/* ------------------- Parent Routes ------------------- */
$router->get('/student/dashboard', 'controllers/student/index.php');
