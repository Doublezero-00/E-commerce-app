
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .body {
        background-color: #CDF5FD;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 200px;
        height: 100vh;
        padding: 5px;
        background-color:#00A9FF; /* Bootstrap light gray */
        border-right: 1px solid var(--bs-border-color); /* Bootstrap border */
        overflow-y: auto; /* enable scroll if content is long */
    }

    /* Main content wrapper */
    .main {
        width: calc(100% - 200px);
        margin-left: 230px; /* match sidebar width */
        padding: 1rem;

    }

    /* Navbar */
    .navbar {
        position: fixed;
        top: 0;
        width: calc(100% - 200px);
        height: 60px;
        left: 200px; /*align with sidebar */
        padding: 1rem;
        background-color: #00A9FF; /* Bootstrap dark */
        color: var(--bs-light); /* Bootstrap light text */
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
    }

    /* Body content */
    .body-content {
        margin-top: 70px; /* avoid overlap with navbar */
        min-height: 85vh;
        background-color: var(--bs-body-bg); /* Bootstrap default body background */
        padding: 1rem;
    }

    .sidebar h3 {
        color: #000000; /* highlight title */
        font-weight: 600;
    }

    .sidebar .nav-link {
        border-radius: .375rem; /* rounded corners */
        margin-bottom: .5rem;
        transition: background-color 0.2s ease;
        color: #000000;
    }

    .sidebar .nav-link:hover {
        background-color: #89CFF3; /* hover effect */
        color: var(--bs-light);
    }

    .loginform {
        width: 400px;
        height: 400px;
        padding: 20px;
        margin-top: 200px;
        margin-left: 38%;
        margin-bottom: 200px;
    }

    .loginform h2 {
        text-align: center;
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 24px;
    }

    .bread-crumb-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        border: 1px solid #dee2e6;
        padding: 10px;
    }

    .categorycreateform {
        width: 600px;
        height: 400px;
        items-align: center;
        padding: 20px;
        margin-left: 20%;
        margin-top: 50px;

    
    }

    .product-card {
        width: 18rem;      /* fixed width */
        height: 350px;     /* fixed height */
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .product-card img {
        height: 200px;     /* fix image height */
        object-fit: cover; /* crop image nicely */
    }

    
</style>
